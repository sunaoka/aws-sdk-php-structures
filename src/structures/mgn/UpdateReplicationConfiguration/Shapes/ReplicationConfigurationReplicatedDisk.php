<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deviceName
 * @property int $iops
 * @property bool $isBootDisk
 * @property 'AUTO'|'GP2'|'IO1'|'SC1'|'ST1'|'STANDARD'|'GP3'|'IO2' $stagingDiskType
 * @property int $throughput
 */
class ReplicationConfigurationReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     deviceName?: string,
     *     iops?: int,
     *     isBootDisk?: bool,
     *     stagingDiskType?: 'AUTO'|'GP2'|'IO1'|'SC1'|'ST1'|'STANDARD'|'GP3'|'IO2',
     *     throughput?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
