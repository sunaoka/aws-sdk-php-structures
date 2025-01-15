<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BuildId
 * @property string|null $BuildArn
 * @property string|null $Name
 * @property string|null $Version
 * @property 'INITIALIZED'|'READY'|'FAILED'|null $Status
 * @property int<1, max>|null $SizeOnDisk
 * @property 'WINDOWS_2012'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'WINDOWS_2016'|'AMAZON_LINUX_2023'|null $OperatingSystem
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $ServerSdkVersion
 */
class Build extends Shape
{
    /**
     * @param array{
     *     BuildId?: string|null,
     *     BuildArn?: string|null,
     *     Name?: string|null,
     *     Version?: string|null,
     *     Status?: 'INITIALIZED'|'READY'|'FAILED'|null,
     *     SizeOnDisk?: int<1, max>|null,
     *     OperatingSystem?: 'WINDOWS_2012'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'WINDOWS_2016'|'AMAZON_LINUX_2023'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ServerSdkVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
