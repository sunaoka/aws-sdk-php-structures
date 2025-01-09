<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DescribeScalingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'autoscaling'|'ecs'|'ec2'|'rds'|'dynamodb' $ServiceNamespace
 * @property string $ResourceId
 * @property 'autoscaling:autoScalingGroup:DesiredCapacity'|'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'rds:cluster:ReadReplicaCount'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits' $ScalableDimension
 * @property int $MinCapacity
 * @property int $MaxCapacity
 * @property list<TargetTrackingConfiguration> $TargetTrackingConfigurations
 * @property PredefinedLoadMetricSpecification $PredefinedLoadMetricSpecification
 * @property CustomizedLoadMetricSpecification $CustomizedLoadMetricSpecification
 * @property int<0, max> $ScheduledActionBufferTime
 * @property 'SetForecastCapacityToMaxCapacity'|'SetMaxCapacityToForecastCapacity'|'SetMaxCapacityAboveForecastCapacity' $PredictiveScalingMaxCapacityBehavior
 * @property int $PredictiveScalingMaxCapacityBuffer
 * @property 'ForecastAndScale'|'ForecastOnly' $PredictiveScalingMode
 * @property 'KeepExternalPolicies'|'ReplaceExternalPolicies' $ScalingPolicyUpdateBehavior
 * @property bool $DisableDynamicScaling
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
     *     PredefinedLoadMetricSpecification?: PredefinedLoadMetricSpecification,
     *     CustomizedLoadMetricSpecification?: CustomizedLoadMetricSpecification,
     *     ScheduledActionBufferTime?: int<0, max>,
     *     PredictiveScalingMaxCapacityBehavior?: 'SetForecastCapacityToMaxCapacity'|'SetMaxCapacityToForecastCapacity'|'SetMaxCapacityAboveForecastCapacity',
     *     PredictiveScalingMaxCapacityBuffer?: int,
     *     PredictiveScalingMode?: 'ForecastAndScale'|'ForecastOnly',
     *     ScalingPolicyUpdateBehavior?: 'KeepExternalPolicies'|'ReplaceExternalPolicies',
     *     DisableDynamicScaling?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
