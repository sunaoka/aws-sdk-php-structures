<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverReadReplica\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeName
 * @property string|null $StorageVolumeStatus
 * @property int|null $AllocatedStorage
 * @property int|null $IOPS
 * @property int|null $MaxAllocatedStorage
 * @property int|null $StorageThroughput
 * @property string|null $StorageType
 */
class AdditionalStorageVolumeOutput extends Shape
{
    /**
     * @param array{
     *     VolumeName?: string|null,
     *     StorageVolumeStatus?: string|null,
     *     AllocatedStorage?: int|null,
     *     IOPS?: int|null,
     *     MaxAllocatedStorage?: int|null,
     *     StorageThroughput?: int|null,
     *     StorageType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
