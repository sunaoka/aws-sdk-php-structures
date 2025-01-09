<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutWarmPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property int<-1, max> $MaxGroupPreparedCapacity
 * @property int<0, max> $MinSize
 * @property 'Stopped'|'Running'|'Hibernated' $PoolState
 * @property Shapes\InstanceReusePolicy $InstanceReusePolicy
 */
class PutWarmPoolRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     MaxGroupPreparedCapacity?: int<-1, max>,
     *     MinSize?: int<0, max>,
     *     PoolState?: 'Stopped'|'Running'|'Hibernated',
     *     InstanceReusePolicy?: Shapes\InstanceReusePolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
