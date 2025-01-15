<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'CREATING'|'CREATE_FAILED'|'RUNNING'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED'|null $status
 * @property string|null $statusReason
 * @property string|null $clusterName
 * @property 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT'|null $clusterType
 * @property string|null $clusterDescription
 * @property string|null $releaseLabel
 * @property list<Volume>|null $volumes
 * @property string|null $initializationScript
 * @property string|null $executionRole
 * @property 'SINGLE'|'MULTI'|null $azMode
 * @property string|null $availabilityZoneId
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 */
class KxCluster extends Shape
{
    /**
     * @param array{
     *     status?: 'PENDING'|'CREATING'|'CREATE_FAILED'|'RUNNING'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED'|null,
     *     statusReason?: string|null,
     *     clusterName?: string|null,
     *     clusterType?: 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT'|null,
     *     clusterDescription?: string|null,
     *     releaseLabel?: string|null,
     *     volumes?: list<Volume>|null,
     *     initializationScript?: string|null,
     *     executionRole?: string|null,
     *     azMode?: 'SINGLE'|'MULTI'|null,
     *     availabilityZoneId?: string|null,
     *     lastModifiedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     createdTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
