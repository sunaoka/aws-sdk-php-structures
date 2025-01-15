<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutWarmPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property int<-1, max>|null $MaxGroupPreparedCapacity
 * @property int<0, max>|null $MinSize
 * @property 'Stopped'|'Running'|'Hibernated'|null $PoolState
 * @property Shapes\InstanceReusePolicy|null $InstanceReusePolicy
 */
class PutWarmPoolRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     MaxGroupPreparedCapacity?: int<-1, max>|null,
     *     MinSize?: int<0, max>|null,
     *     PoolState?: 'Stopped'|'Running'|'Hibernated'|null,
     *     InstanceReusePolicy?: Shapes\InstanceReusePolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
