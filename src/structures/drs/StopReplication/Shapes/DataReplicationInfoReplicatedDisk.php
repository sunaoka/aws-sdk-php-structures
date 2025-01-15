<?php

namespace Sunaoka\Aws\Structures\drs\StopReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $backloggedStorageBytes
 * @property string|null $deviceName
 * @property int<0, max>|null $replicatedStorageBytes
 * @property int<0, max>|null $rescannedStorageBytes
 * @property int<0, max>|null $totalStorageBytes
 * @property 'REGULAR'|'CONTAINS_MARKETPLACE_PRODUCT_CODES'|'MISSING_VOLUME_ATTRIBUTES'|'MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE'|'PENDING'|null $volumeStatus
 */
class DataReplicationInfoReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     backloggedStorageBytes?: int<0, max>|null,
     *     deviceName?: string|null,
     *     replicatedStorageBytes?: int<0, max>|null,
     *     rescannedStorageBytes?: int<0, max>|null,
     *     totalStorageBytes?: int<0, max>|null,
     *     volumeStatus?: 'REGULAR'|'CONTAINS_MARKETPLACE_PRODUCT_CODES'|'MISSING_VOLUME_ATTRIBUTES'|'MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE'|'PENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
