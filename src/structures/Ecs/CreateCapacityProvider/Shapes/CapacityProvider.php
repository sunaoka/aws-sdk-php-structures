<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $capacityProviderArn
 * @property string $name
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property AutoScalingGroupProvider $autoScalingGroupProvider
 * @property 'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED' $updateStatus
 * @property string $updateStatusReason
 * @property list<Tag> $tags
 */
class CapacityProvider extends Shape
{
    /**
     * @param array{
     *     capacityProviderArn?: string,
     *     name?: string,
     *     status?: 'ACTIVE'|'INACTIVE',
     *     autoScalingGroupProvider?: AutoScalingGroupProvider,
     *     updateStatus?: 'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED',
     *     updateStatusReason?: string,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
