<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $capacityProviderArn
 * @property string|null $name
 * @property string|null $cluster
 * @property 'PROVISIONING'|'ACTIVE'|'DEPROVISIONING'|'INACTIVE'|null $status
 * @property AutoScalingGroupProvider|null $autoScalingGroupProvider
 * @property ManagedInstancesProvider|null $managedInstancesProvider
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|null $updateStatus
 * @property string|null $updateStatusReason
 * @property list<Tag>|null $tags
 * @property 'EC2_AUTOSCALING'|'MANAGED_INSTANCES'|'FARGATE'|'FARGATE_SPOT'|null $type
 */
class CapacityProvider extends Shape
{
    /**
     * @param array{
     *     capacityProviderArn?: string|null,
     *     name?: string|null,
     *     cluster?: string|null,
     *     status?: 'PROVISIONING'|'ACTIVE'|'DEPROVISIONING'|'INACTIVE'|null,
     *     autoScalingGroupProvider?: AutoScalingGroupProvider|null,
     *     managedInstancesProvider?: ManagedInstancesProvider|null,
     *     updateStatus?: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|null,
     *     updateStatusReason?: string|null,
     *     tags?: list<Tag>|null,
     *     type?: 'EC2_AUTOSCALING'|'MANAGED_INSTANCES'|'FARGATE'|'FARGATE_SPOT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
