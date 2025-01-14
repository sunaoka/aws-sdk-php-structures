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

        $removeServices = 0;
        $removeActions = 0;

        $finder = self::getFinder($structuresPath);
        foreach ($finder as $file) {
            $service = strtolower($file->getBasename());
            if (array_key_exists($service, $keeps)) {
                if ($keeps[$service]) {
                    $actions = self::getFinder($file->getRealPath());
                    foreach ($actions as $action) {
                        if (! in_array(strtolower($action->getBasename()), $keeps[$service], true)) {
                            $removeActions++;
                            $filesystem->remove($action->getRealPath());
                        }
                    }

                }

                continue;
            }

            $removeServices++;
            $filesystem->remove($file->getRealPath());
        }

        $event->getIO()->write("Removed {$removeServices} AWS service structures");
        $event->getIO()->write("Removed {$removeActions} AWS action structures");
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
}
