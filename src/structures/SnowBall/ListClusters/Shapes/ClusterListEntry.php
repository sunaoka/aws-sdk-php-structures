<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterId
 * @property 'AwaitingQuorum'|'Pending'|'InUse'|'Complete'|'Cancelled' $ClusterState
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $Description
 */
class ClusterListEntry extends Shape
{
    /**
     * @param array{
     *     ClusterId?: string,
     *     ClusterState?: 'AwaitingQuorum'|'Pending'|'InUse'|'Complete'|'Cancelled',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
