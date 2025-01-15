<?php

namespace Sunaoka\Aws\Structures\drs\UpdateReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deviceName
 * @property int<0, max>|null $iops
 * @property bool|null $isBootDisk
 * @property 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD'|null $optimizedStagingDiskType
 * @property 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD'|null $stagingDiskType
 * @property int<0, max>|null $throughput
 */
class ReplicationConfigurationReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     deviceName?: string|null,
     *     iops?: int<0, max>|null,
     *     isBootDisk?: bool|null,
     *     optimizedStagingDiskType?: 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD'|null,
     *     stagingDiskType?: 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD'|null,
     *     throughput?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
