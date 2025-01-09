<?php

namespace Sunaoka\Aws\Structures\drs\CreateExtendedSourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $backloggedStorageBytes
 * @property string $deviceName
 * @property int $replicatedStorageBytes
 * @property int $rescannedStorageBytes
 * @property int $totalStorageBytes
 * @property 'REGULAR'|'CONTAINS_MARKETPLACE_PRODUCT_CODES'|'MISSING_VOLUME_ATTRIBUTES'|'MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE'|'PENDING' $volumeStatus
 */
class DataReplicationInfoReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     backloggedStorageBytes?: int,
     *     deviceName?: string,
     *     replicatedStorageBytes?: int,
     *     rescannedStorageBytes?: int,
     *     totalStorageBytes?: int,
     *     volumeStatus?: 'REGULAR'|'CONTAINS_MARKETPLACE_PRODUCT_CODES'|'MISSING_VOLUME_ATTRIBUTES'|'MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE'|'PENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
