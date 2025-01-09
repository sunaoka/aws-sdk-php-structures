<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'CREATING'|'CREATE_FAILED'|'RUNNING'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED' $status
 * @property string $statusReason
 * @property string $clusterName
 * @property 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT' $clusterType
 * @property string $clusterDescription
 * @property string $releaseLabel
 * @property list<Volume> $volumes
 * @property string $initializationScript
 * @property string $executionRole
 * @property 'SINGLE'|'MULTI' $azMode
 * @property string $availabilityZoneId
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 */
class KxCluster extends Shape
{
    /**
     * @param array{
     *     status?: 'PENDING'|'CREATING'|'CREATE_FAILED'|'RUNNING'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED',
     *     statusReason?: string,
     *     clusterName?: string,
     *     clusterType?: 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT',
     *     clusterDescription?: string,
     *     releaseLabel?: string,
     *     volumes?: list<Volume>,
     *     initializationScript?: string,
     *     executionRole?: string,
     *     azMode?: 'SINGLE'|'MULTI',
     *     availabilityZoneId?: string,
     *     lastModifiedTimestamp?: \Aws\Api\DateTimeResult,
     *     createdTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
