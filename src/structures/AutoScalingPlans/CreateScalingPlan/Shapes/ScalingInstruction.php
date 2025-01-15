<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\CreateScalingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'autoscaling'|'ecs'|'ec2'|'rds'|'dynamodb' $ServiceNamespace
 * @property string $ResourceId
 * @property 'autoscaling:autoScalingGroup:DesiredCapacity'|'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'rds:cluster:ReadReplicaCount'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits' $ScalableDimension
 * @property int $MinCapacity
 * @property int $MaxCapacity
 * @property list<TargetTrackingConfiguration> $TargetTrackingConfigurations
 * @property PredefinedLoadMetricSpecification|null $PredefinedLoadMetricSpecification
 * @property CustomizedLoadMetricSpecification|null $CustomizedLoadMetricSpecification
 * @property int<0, max>|null $ScheduledActionBufferTime
 * @property 'SetForecastCapacityToMaxCapacity'|'SetMaxCapacityToForecastCapacity'|'SetMaxCapacityAboveForecastCapacity'|null $PredictiveScalingMaxCapacityBehavior
 * @property int|null $PredictiveScalingMaxCapacityBuffer
 * @property 'ForecastAndScale'|'ForecastOnly'|null $PredictiveScalingMode
 * @property 'KeepExternalPolicies'|'ReplaceExternalPolicies'|null $ScalingPolicyUpdateBehavior
 * @property bool|null $DisableDynamicScaling
 */
class ScalingInstruction extends Shape
{
    /**
     * @param array{
     *     ServiceNamespace: 'autoscaling'|'ecs'|'ec2'|'rds'|'dynamodb',
     *     ResourceId: string,
     *     ScalableDimension: 'autoscaling:autoScalingGroup:DesiredCapacity'|'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'rds:cluster:ReadReplicaCount'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits',
     *     MinCapacity: int,
     *     MaxCapacity: int,
     *     TargetTrackingConfigurations: list<TargetTrackingConfiguration>,
     *     PredefinedLoadMetricSpecification?: PredefinedLoadMetricSpecification|null,
     *     CustomizedLoadMetricSpecification?: CustomizedLoadMetricSpecification|null,
     *     ScheduledActionBufferTime?: int<0, max>|null,
     *     PredictiveScalingMaxCapacityBehavior?: 'SetForecastCapacityToMaxCapacity'|'SetMaxCapacityToForecastCapacity'|'SetMaxCapacityAboveForecastCapacity'|null,
     *     PredictiveScalingMaxCapacityBuffer?: int|null,
     *     PredictiveScalingMode?: 'ForecastAndScale'|'ForecastOnly'|null,
     *     ScalingPolicyUpdateBehavior?: 'KeepExternalPolicies'|'ReplaceExternalPolicies'|null,
     *     DisableDynamicScaling?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
