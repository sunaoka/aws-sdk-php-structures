<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clusterName
 * @property 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT'|null $clusterType
 * @property 'PENDING'|'CREATING'|'CREATE_FAILED'|'RUNNING'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED'|null $clusterStatus
 */
class KxAttachedCluster extends Shape
{
    /**
     * @param array{
     *     clusterName?: string|null,
     *     clusterType?: 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT'|null,
     *     clusterStatus?: 'PENDING'|'CREATING'|'CREATE_FAILED'|'RUNNING'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
