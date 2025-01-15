<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FleetId
 * @property string|null $FleetArn
 * @property string|null $Name
 * @property 'ACTIVE'|'UPDATE_REQUESTED'|'UPDATING'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'ERROR'|null $Status
 * @property int|null $ScalingAdjustment
 * @property 'ChangeInCapacity'|'ExactCapacity'|'PercentChangeInCapacity'|null $ScalingAdjustmentType
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|null $ComparisonOperator
 * @property double|null $Threshold
 * @property int<1, max>|null $EvaluationPeriods
 * @property 'ActivatingGameSessions'|'ActiveGameSessions'|'ActiveInstances'|'AvailableGameSessions'|'AvailablePlayerSessions'|'CurrentPlayerSessions'|'IdleInstances'|'PercentAvailableGameSessions'|'PercentIdleInstances'|'QueueDepth'|'WaitTime'|'ConcurrentActivatableGameSessions'|null $MetricName
 * @property 'RuleBased'|'TargetBased'|null $PolicyType
 * @property TargetConfiguration|null $TargetConfiguration
 * @property 'PENDING_UPDATE'|null $UpdateStatus
 * @property string|null $Location
 */
class ScalingPolicy extends Shape
{
    /**
     * @param array{
     *     FleetId?: string|null,
     *     FleetArn?: string|null,
     *     Name?: string|null,
     *     Status?: 'ACTIVE'|'UPDATE_REQUESTED'|'UPDATING'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'ERROR'|null,
     *     ScalingAdjustment?: int|null,
     *     ScalingAdjustmentType?: 'ChangeInCapacity'|'ExactCapacity'|'PercentChangeInCapacity'|null,
     *     ComparisonOperator?: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|null,
     *     Threshold?: double|null,
     *     EvaluationPeriods?: int<1, max>|null,
     *     MetricName?: 'ActivatingGameSessions'|'ActiveGameSessions'|'ActiveInstances'|'AvailableGameSessions'|'AvailablePlayerSessions'|'CurrentPlayerSessions'|'IdleInstances'|'PercentAvailableGameSessions'|'PercentIdleInstances'|'QueueDepth'|'WaitTime'|'ConcurrentActivatableGameSessions'|null,
     *     PolicyType?: 'RuleBased'|'TargetBased'|null,
     *     TargetConfiguration?: TargetConfiguration|null,
     *     UpdateStatus?: 'PENDING_UPDATE'|null,
     *     Location?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
