<?php

namespace Tests\Task;

use Composer\Config;
use Composer\IO\ConsoleIO;
use Composer\Package\RootPackage;
use Composer\Script\Event;
use Sunaoka\Aws\Structures\Task\Composer;
use Symfony\Component\Filesystem\Filesystem;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class ComposerTest extends TestCase
{
    /**
     * @return void
     */
    public function testRemoveUnusedServicesSuccess()
    {
        $tempDir = sys_get_temp_dir();
        $vendorPath = $tempDir . '/sunaoka/aws-sdk-php-structures-vendor-' . mt_rand();
        $structuresPath = "{$vendorPath}/sunaoka/aws-sdk-php-structures/src/structures";

        $all = [
            "{$structuresPath}/Ec2/StartInstances",
            "{$structuresPath}/S3/GetObject",
            "{$structuresPath}/S3/PutObject",
            "{$structuresPath}/S3/ListObjectsV2",
            "{$structuresPath}/Sqs",
        ];

        $keeps = [
            'Ec2' => [],
            'S3'  => [
                'GetObject',
            ],
        ];

        $filesystem = new Filesystem();
        $filesystem->mkdir($all);

        $event = $this->getMockEvent($keeps, $vendorPath);

        $io = \Mockery::mock(ConsoleIO::class);
        $io->shouldReceive('write')
            ->once()
            ->with('Removed 1 AWS service structures')
            ->getMock()
            ->shouldReceive('write')
            ->once()
            ->with('Removed 2 AWS action structures')
            ->getMock()
        ;

        $event->shouldReceive('getIO')
            ->andReturn($io)
            ->getMock()
        ;

        Composer::removeUnusedServices($event, $filesystem);

        self::assertTrue($filesystem->exists("{$structuresPath}/Ec2/StartInstances"));
        self::assertTrue($filesystem->exists("{$structuresPath}/S3/GetObject"));
        self::assertFalse($filesystem->exists("{$structuresPath}/S3/PutObject"));
        self::assertFalse($filesystem->exists("{$structuresPath}/S3/ListObjectsV2"));
        self::assertFalse($filesystem->exists("{$structuresPath}/Sqs"));

        $filesystem->remove($vendorPath);
    }

    /**
     * @return void
     */
    public function testRemoveUnusedServicesWithoutExtraSuccess()
    {
        $tempDir = sys_get_temp_dir();
        $vendorPath = $tempDir . '/sunaoka/aws-sdk-php-structures-vendor-' . mt_rand();
        $structuresPath = "{$vendorPath}/sunaoka/aws-sdk-php-structures/src/structures";

        $all = [
            "{$structuresPath}/Ec2/StartInstances",
            "{$structuresPath}/S3/GetObject",
            "{$structuresPath}/S3/PutObject",
            "{$structuresPath}/S3/ListObjectsV2",
            "{$structuresPath}/Sqs",
        ];

        $keeps = [];

        $filesystem = new Filesystem();
        $filesystem->mkdir($all);

        $event = $this->getMockEvent($keeps, $vendorPath);

        Composer::removeUnusedServices($event, $filesystem);

        self::assertTrue($filesystem->exists("{$structuresPath}/Ec2/StartInstances"));
        self::assertTrue($filesystem->exists("{$structuresPath}/S3/GetObject"));
        self::assertTrue($filesystem->exists("{$structuresPath}/S3/PutObject"));
        self::assertTrue($filesystem->exists("{$structuresPath}/S3/ListObjectsV2"));
        self::assertTrue($filesystem->exists("{$structuresPath}/Sqs"));

        $filesystem->remove($vendorPath);
    }

    /**
     * @param string $vendorPath
     *
     * @return Event|\Mockery\MockInterface
     */
    private function getMockEvent(array $keeps, $vendorPath)
    {
        $package = \Mockery::mock(RootPackage::class)
            ->shouldReceive('getExtra')
            ->andReturn(count($keeps) > 0 ? ['sunaoka/aws-sdk-php-structures' => $keeps] : [])
            ->getMock()
        ;

        $config = \Mockery::mock(Config::class)
            ->shouldReceive('get')
            ->with('vendor-dir')
            ->andReturn($vendorPath)
            ->getMock()
        ;

        $composer = \Mockery::mock(\Composer\Composer::class)
            ->shouldReceive('getPackage')
            ->andReturn($package)
            ->getMock()
            ->shouldReceive('getConfig')
            ->andReturn($config)
            ->getMock()
        ;

        /** @var Event|\Mockery\MockInterface */
        return \Mockery::mock(Event::class)
            ->shouldReceive('getComposer')
            ->andReturn($composer)
            ->getMock();
    }
}
