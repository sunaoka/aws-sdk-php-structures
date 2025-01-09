<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\GetScalingPlanResourceForecastData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScalingPlanName
 * @property int $ScalingPlanVersion
 * @property 'autoscaling'|'ecs'|'ec2'|'rds'|'dynamodb' $ServiceNamespace
 * @property string $ResourceId
 * @property 'autoscaling:autoScalingGroup:DesiredCapacity'|'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'rds:cluster:ReadReplicaCount'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits' $ScalableDimension
 * @property 'CapacityForecast'|'LoadForecast'|'ScheduledActionMinCapacity'|'ScheduledActionMaxCapacity' $ForecastDataType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class GetScalingPlanResourceForecastDataRequest extends Request
{
    /**
     * @param array{
     *     ScalingPlanName: string,
     *     ScalingPlanVersion: int,
     *     ServiceNamespace: 'autoscaling'|'ecs'|'ec2'|'rds'|'dynamodb',
     *     ResourceId: string,
     *     ScalableDimension: 'autoscaling:autoScalingGroup:DesiredCapacity'|'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'rds:cluster:ReadReplicaCount'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits',
     *     ForecastDataType: 'CapacityForecast'|'LoadForecast'|'ScheduledActionMinCapacity'|'ScheduledActionMaxCapacity',
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
