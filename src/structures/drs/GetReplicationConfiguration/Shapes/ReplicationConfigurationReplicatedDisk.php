<?php

namespace Sunaoka\Aws\Structures\drs\GetReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deviceName
 * @property bool|null $isBootDisk
 * @property 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD'|null $stagingDiskType
 * @property int<0, max>|null $iops
 * @property int<0, max>|null $throughput
 * @property 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD'|null $optimizedStagingDiskType
 */
class ReplicationConfigurationReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     deviceName?: string|null,
     *     isBootDisk?: bool|null,
     *     stagingDiskType?: 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD'|null,
     *     iops?: int<0, max>|null,
     *     throughput?: int<0, max>|null,
     *     optimizedStagingDiskType?: 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
