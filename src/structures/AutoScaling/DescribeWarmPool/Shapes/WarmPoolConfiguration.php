<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeWarmPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, max>|null $MaxGroupPreparedCapacity
 * @property int<0, max>|null $MinSize
 * @property 'Stopped'|'Running'|'Hibernated'|null $PoolState
 * @property 'PendingDelete'|null $Status
 * @property InstanceReusePolicy|null $InstanceReusePolicy
 */
class WarmPoolConfiguration extends Shape
{
    /**
     * @param array{
     *     MaxGroupPreparedCapacity?: int<-1, max>|null,
     *     MinSize?: int<0, max>|null,
     *     PoolState?: 'Stopped'|'Running'|'Hibernated'|null,
     *     Status?: 'PendingDelete'|null,
     *     InstanceReusePolicy?: InstanceReusePolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
