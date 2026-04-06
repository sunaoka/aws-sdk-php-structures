<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeCapacityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $capacityProviderArn
 * @property string|null $name
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property AutoScalingGroupProvider|null $autoScalingGroupProvider
 * @property 'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|null $updateStatus
 * @property string|null $updateStatusReason
 * @property list<Tag>|null $tags
 */
class CapacityProvider extends Shape
{
    /**
     * @param array{
     *     capacityProviderArn?: string|null,
     *     name?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     autoScalingGroupProvider?: AutoScalingGroupProvider|null,
     *     updateStatus?: 'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|null,
     *     updateStatusReason?: string|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
