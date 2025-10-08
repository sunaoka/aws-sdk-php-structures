<?php

namespace Tests\Task;

use Composer\Config;
use Composer\IO\ConsoleIO;
use Composer\Package\RootPackage;
use Composer\Script\Event;
use Mockery\MockInterface;
use Sunaoka\Aws\Structures\Task\Composer;
use Symfony\Component\Filesystem\Filesystem;
use Tests\TestCase;

/**
 * @internal
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

        $directories = [
            "{$structuresPath}/Ec2/StartInstances",
            "{$structuresPath}/S3/GetObject",
            "{$structuresPath}/S3/PutObject",
            "{$structuresPath}/S3/ListObjectsV2",
            "{$structuresPath}/Sqs",
        ];

        $clients = [
            __DIR__ . '/../../src/structures/Ec2/Ec2Client.php' => "{$structuresPath}/Ec2/Ec2Client.php",
            __DIR__ . '/../../src/structures/S3/S3Client.php'   => "{$structuresPath}/S3/S3Client.php",
            __DIR__ . '/../../src/structures/Sqs/SqsClient.php' => "{$structuresPath}/Sqs/SqsClient.php",
        ];

        $keeps = [
            'Ec2' => [],
            'S3'  => [
                'GetObject',
            ],
        ];

        $filesystem = new Filesystem();
        $filesystem->mkdir($directories);

        foreach ($clients as $src => $dist) {
            $filesystem->copy($src, $dist);
        }

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

        $this->assertFileContains('use GetObject\GetObjectTrait;', "{$structuresPath}/S3/S3Client.php");
        $this->assertFileNotContains('use PutObject\PutObjectTrait;', "{$structuresPath}/S3/S3Client.php");
        $this->assertFileNotContains('use ListObjectsV2\ListObjectsV2Trait;', "{$structuresPath}/S3/S3Client.php");

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

        $directories = [
            "{$structuresPath}/Ec2/StartInstances",
            "{$structuresPath}/S3/GetObject",
            "{$structuresPath}/S3/PutObject",
            "{$structuresPath}/S3/ListObjectsV2",
            "{$structuresPath}/Sqs",
        ];

        $keeps = [];

        $filesystem = new Filesystem();
        $filesystem->mkdir($directories);

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
     * @param array<string, string[]> $keeps
     * @param string                  $vendorPath
     *
     * @return Event|MockInterface
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

        /** @var Event|MockInterface */
        return \Mockery::mock(Event::class)
            ->shouldReceive('getComposer')
            ->andReturn($composer)
            ->getMock()
        ;
    }
}
