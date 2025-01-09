<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BuildId
 * @property string $BuildArn
 * @property string $Name
 * @property string $Version
 * @property 'INITIALIZED'|'READY'|'FAILED' $Status
 * @property int<1, max> $SizeOnDisk
 * @property 'WINDOWS_2012'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'WINDOWS_2016'|'AMAZON_LINUX_2023' $OperatingSystem
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $ServerSdkVersion
 */
class Build extends Shape
{
    /**
     * @param array{
     *     BuildId?: string,
     *     BuildArn?: string,
     *     Name?: string,
     *     Version?: string,
     *     Status?: 'INITIALIZED'|'READY'|'FAILED',
     *     SizeOnDisk?: int<1, max>,
     *     OperatingSystem?: 'WINDOWS_2012'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'WINDOWS_2016'|'AMAZON_LINUX_2023',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     ServerSdkVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
