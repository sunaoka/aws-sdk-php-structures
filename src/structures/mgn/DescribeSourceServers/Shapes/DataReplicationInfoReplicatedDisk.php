<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deviceName
 * @property int<0, max>|null $totalStorageBytes
 * @property int<0, max>|null $replicatedStorageBytes
 * @property int<0, max>|null $rescannedStorageBytes
 * @property int<0, max>|null $backloggedStorageBytes
 */
class DataReplicationInfoReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     deviceName?: string|null,
     *     totalStorageBytes?: int<0, max>|null,
     *     replicatedStorageBytes?: int<0, max>|null,
     *     rescannedStorageBytes?: int<0, max>|null,
     *     backloggedStorageBytes?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
