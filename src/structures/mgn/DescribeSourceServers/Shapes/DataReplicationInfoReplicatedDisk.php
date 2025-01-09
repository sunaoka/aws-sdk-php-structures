<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $backloggedStorageBytes
 * @property string $deviceName
 * @property int<0, max> $replicatedStorageBytes
 * @property int<0, max> $rescannedStorageBytes
 * @property int<0, max> $totalStorageBytes
 */
class DataReplicationInfoReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     backloggedStorageBytes?: int<0, max>,
     *     deviceName?: string,
     *     replicatedStorageBytes?: int<0, max>,
     *     rescannedStorageBytes?: int<0, max>,
     *     totalStorageBytes?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
