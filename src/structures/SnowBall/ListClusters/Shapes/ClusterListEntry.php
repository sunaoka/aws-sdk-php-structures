<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterId
 * @property 'AwaitingQuorum'|'Pending'|'InUse'|'Complete'|'Cancelled'|null $ClusterState
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $Description
 */
class ClusterListEntry extends Shape
{
    /**
     * @param array{
     *     ClusterId?: string|null,
     *     ClusterState?: 'AwaitingQuorum'|'Pending'|'InUse'|'Complete'|'Cancelled'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
