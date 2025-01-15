<?php

namespace Sunaoka\Aws\Structures\mgn\ChangeServerLifeCycleState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $backloggedStorageBytes
 * @property string|null $deviceName
 * @property int<0, max>|null $replicatedStorageBytes
 * @property int<0, max>|null $rescannedStorageBytes
 * @property int<0, max>|null $totalStorageBytes
 */
class DataReplicationInfoReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     backloggedStorageBytes?: int<0, max>|null,
     *     deviceName?: string|null,
     *     replicatedStorageBytes?: int<0, max>|null,
     *     rescannedStorageBytes?: int<0, max>|null,
     *     totalStorageBytes?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
