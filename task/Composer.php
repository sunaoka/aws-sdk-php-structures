<?php

namespace Sunaoka\Aws\Structures\Task;

use Composer\Script\Event;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

class Composer
{
    /**
     * @param null|Filesystem $filesystem
     *
     * @return void
     */
    public static function removeUnusedServices(Event $event, $filesystem = null)
    {
        $composer = $event->getComposer();
        $extra = $composer->getPackage()->getExtra();
        $filesystem = $filesystem ?: new Filesystem();

        /** @var array<string, list<string>> $extra */
        $extra = isset($extra['sunaoka/aws-sdk-php-structures']) ? $extra['sunaoka/aws-sdk-php-structures'] : [];
        if (count($extra) === 0) {
            return;
        }

        /** @var array<string, list<string>> $keeps */
        $keeps = [];
        foreach ($extra as $service => $actions) {
            $keeps[strtolower($service)] = array_map('strtolower', $actions);
        }

        /** @var string $vendorPath */
        $vendorPath = $composer->getConfig()->get('vendor-dir');
        $structuresPath = "{$vendorPath}/sunaoka/aws-sdk-php-structures/src/structures";

        $removeServices = [];
        $removeActions = [];

        $finder = self::getFinder($structuresPath);
        foreach ($finder as $file) {
            $service = strtolower($file->getBasename());
            if (array_key_exists($service, $keeps)) {
                if ($keeps[$service]) {
                    $names = [];
                    $actions = self::getFinder($file->getRealPath());
                    foreach ($actions as $action) {
                        if (! in_array(strtolower($action->getBasename()), $keeps[$service], true)) {
                            $names[] = $action->getBasename();
                            $removeActions[] = $action->getRealPath();
                        }
                    }

                    $client = self::getClient($file->getRealPath());
                    self::removeTraits($client, $names);
                }

                continue;
            }

            $removeServices[] = $file->getRealPath();
        }

        $filesystem->remove(array_merge($removeServices, $removeActions));

        $event->getIO()->write(sprintf('Removed %d AWS service structures', count($removeServices)));
        $event->getIO()->write(sprintf('Removed %d AWS action structures', count($removeActions)));
    }

    /**
     * @param string $directory
     *
     * @return Finder
     */
    private static function getFinder($directory)
    {
        return (new Finder())
            ->directories()
            ->depth('== 0')
            ->in($directory)
        ;
    }

    /**
     * @param string $directory
     *
     * @return string
     */
    private static function getClient($directory)
    {
        $finder = (new Finder())
            ->files()
            ->depth('== 0')
            ->in($directory)
            ->filter(function (\SplFileInfo $file) {
                $haystack = $file->getBasename();
                $needle = 'Client.php';

                return substr_compare($haystack, $needle, - strlen($needle)) === 0;
            })
        ;

        $iterator = $finder->getIterator();
        $iterator->rewind();

        /** @var string */
        return $iterator->current();
    }

    /**
     * @param string   $filename
     * @param string[] $names
     *
     * @return void
     */
    private static function removeTraits($filename, $names)
    {
        $lines = file($filename, FILE_IGNORE_NEW_LINES);
        if ($lines === false) {
            throw new \RuntimeException("{$filename}: Failed to read file");  // @codeCoverageIgnore
        }

        $result = array_filter($lines, function ($item) use ($names) {
            foreach ($names as $name) {
                if (preg_match("/use {$name}\\\\{$name}Trait;/", $item) === 1) {
                    return false;
                }
            }

            return true;
        });

        $content = implode("\n", $result);

        $result = file_put_contents($filename, $content);
        if ($result === false || $result === 0) {
            throw new \RuntimeException("{$filename}: Failed to write file");  // @codeCoverageIgnore
        }
    }
}
