<?php

namespace Sunaoka\Aws\Structures\mgn\ResumeReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $backloggedStorageBytes
 * @property string $deviceName
 * @property int $replicatedStorageBytes
 * @property int $rescannedStorageBytes
 * @property int $totalStorageBytes
 */
class DataReplicationInfoReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     backloggedStorageBytes?: int,
     *     deviceName?: string,
     *     replicatedStorageBytes?: int,
     *     rescannedStorageBytes?: int,
     *     totalStorageBytes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
