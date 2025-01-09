<?php

namespace Sunaoka\Aws\Structures\drs\StopReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $backloggedStorageBytes
 * @property string $deviceName
 * @property int<0, max> $replicatedStorageBytes
 * @property int<0, max> $rescannedStorageBytes
 * @property int<0, max> $totalStorageBytes
 * @property 'REGULAR'|'CONTAINS_MARKETPLACE_PRODUCT_CODES'|'MISSING_VOLUME_ATTRIBUTES'|'MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE'|'PENDING' $volumeStatus
 */
class DataReplicationInfoReplicatedDisk extends Shape
{
    /**
     * @param array{
     *     backloggedStorageBytes?: int<0, max>,
     *     deviceName?: string,
     *     replicatedStorageBytes?: int<0, max>,
     *     rescannedStorageBytes?: int<0, max>,
     *     totalStorageBytes?: int<0, max>,
     *     volumeStatus?: 'REGULAR'|'CONTAINS_MARKETPLACE_PRODUCT_CODES'|'MISSING_VOLUME_ATTRIBUTES'|'MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE'|'PENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
