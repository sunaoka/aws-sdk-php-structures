<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeWarmPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, max> $MaxGroupPreparedCapacity
 * @property int<0, max> $MinSize
 * @property 'Stopped'|'Running'|'Hibernated' $PoolState
 * @property 'PendingDelete' $Status
 * @property InstanceReusePolicy $InstanceReusePolicy
 */
class WarmPoolConfiguration extends Shape
{
    /**
     * @param array{
     *     MaxGroupPreparedCapacity?: int<-1, max>,
     *     MinSize?: int<0, max>,
     *     PoolState?: 'Stopped'|'Running'|'Hibernated',
     *     Status?: 'PendingDelete',
     *     InstanceReusePolicy?: InstanceReusePolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
