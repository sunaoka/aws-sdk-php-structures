<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deviceName
 * @property bool|null $isBootDisk
 * @property 'AUTO'|'GP2'|'IO1'|'SC1'|'ST1'|'STANDARD'|'GP3'|'IO2'|null $stagingDiskType
 * @property int<0, max>|null $iops
 * @property int<0, max>|null $throughput
 */
class ReplicationConfigurationReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     deviceName?: string|null,
     *     isBootDisk?: bool|null,
     *     stagingDiskType?: 'AUTO'|'GP2'|'IO1'|'SC1'|'ST1'|'STANDARD'|'GP3'|'IO2'|null,
     *     iops?: int<0, max>|null,
     *     throughput?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
