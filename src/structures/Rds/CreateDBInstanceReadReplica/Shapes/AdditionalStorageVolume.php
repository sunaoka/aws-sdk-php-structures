<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBInstanceReadReplica\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeName
 * @property int|null $AllocatedStorage
 * @property int|null $IOPS
 * @property int|null $MaxAllocatedStorage
 * @property int|null $StorageThroughput
 * @property string|null $StorageType
 */
class AdditionalStorageVolume extends Shape
{
    /**
     * @param array{
     *     VolumeName: string,
     *     AllocatedStorage?: int|null,
     *     IOPS?: int|null,
     *     MaxAllocatedStorage?: int|null,
     *     StorageThroughput?: int|null,
     *     StorageType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
