<?php

namespace Sunaoka\Aws\Structures\drs\UpdateReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deviceName
 * @property int<0, max> $iops
 * @property bool $isBootDisk
 * @property 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD' $optimizedStagingDiskType
 * @property 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD' $stagingDiskType
 * @property int<0, max> $throughput
 */
class ReplicationConfigurationReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     deviceName?: string,
     *     iops?: int<0, max>,
     *     isBootDisk?: bool,
     *     optimizedStagingDiskType?: 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD',
     *     stagingDiskType?: 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD',
     *     throughput?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
