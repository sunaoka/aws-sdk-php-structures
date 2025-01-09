<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterName
 * @property 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT' $clusterType
 * @property 'PENDING'|'CREATING'|'CREATE_FAILED'|'RUNNING'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED' $clusterStatus
 */
class KxAttachedCluster extends Shape
{
    /**
     * @param array{
     *     clusterName?: string,
     *     clusterType?: 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT',
     *     clusterStatus?: 'PENDING'|'CREATING'|'CREATE_FAILED'|'RUNNING'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
