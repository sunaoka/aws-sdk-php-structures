<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DescribeScalingPlanResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScalingPlanName
 * @property int $ScalingPlanVersion
 * @property 'autoscaling'|'ecs'|'ec2'|'rds'|'dynamodb' $ServiceNamespace
 * @property string $ResourceId
 * @property 'autoscaling:autoScalingGroup:DesiredCapacity'|'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'rds:cluster:ReadReplicaCount'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits' $ScalableDimension
 * @property list<ScalingPolicy> $ScalingPolicies
 * @property 'Inactive'|'PartiallyActive'|'Active' $ScalingStatusCode
 * @property string $ScalingStatusMessage
 */
class ScalingPlanResource extends Shape
{
    /**
     * @param array{
     *     ScalingPlanName: string,
     *     ScalingPlanVersion: int,
     *     ServiceNamespace: 'autoscaling'|'ecs'|'ec2'|'rds'|'dynamodb',
     *     ResourceId: string,
     *     ScalableDimension: 'autoscaling:autoScalingGroup:DesiredCapacity'|'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'rds:cluster:ReadReplicaCount'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits',
     *     ScalingPolicies?: list<ScalingPolicy>,
     *     ScalingStatusCode: 'Inactive'|'PartiallyActive'|'Active',
     *     ScalingStatusMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
