<?php

namespace Sunaoka\Aws\Structures\drs\GetReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deviceName
 * @property int $iops
 * @property bool $isBootDisk
 * @property 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD' $optimizedStagingDiskType
 * @property 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD' $stagingDiskType
 * @property int $throughput
 */
class ReplicationConfigurationReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     deviceName?: string,
     *     iops?: int,
     *     isBootDisk?: bool,
     *     optimizedStagingDiskType?: 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD',
     *     stagingDiskType?: 'AUTO'|'GP2'|'GP3'|'IO1'|'SC1'|'ST1'|'STANDARD',
     *     throughput?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
