<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutWarmPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property int $MaxGroupPreparedCapacity
 * @property int $MinSize
 * @property 'Stopped'|'Running'|'Hibernated' $PoolState
 * @property Shapes\InstanceReusePolicy $InstanceReusePolicy
 */
class PutWarmPoolRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     MaxGroupPreparedCapacity?: int,
     *     MinSize?: int,
     *     PoolState?: 'Stopped'|'Running'|'Hibernated',
     *     InstanceReusePolicy?: Shapes\InstanceReusePolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
