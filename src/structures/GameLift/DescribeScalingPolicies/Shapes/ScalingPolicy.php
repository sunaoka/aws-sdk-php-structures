<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FleetId
 * @property string $FleetArn
 * @property string $Name
 * @property 'ACTIVE'|'UPDATE_REQUESTED'|'UPDATING'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'ERROR' $Status
 * @property int $ScalingAdjustment
 * @property 'ChangeInCapacity'|'ExactCapacity'|'PercentChangeInCapacity' $ScalingAdjustmentType
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold' $ComparisonOperator
 * @property double $Threshold
 * @property int $EvaluationPeriods
 * @property 'ActivatingGameSessions'|'ActiveGameSessions'|'ActiveInstances'|'AvailableGameSessions'|'AvailablePlayerSessions'|'CurrentPlayerSessions'|'IdleInstances'|'PercentAvailableGameSessions'|'PercentIdleInstances'|'QueueDepth'|'WaitTime'|'ConcurrentActivatableGameSessions' $MetricName
 * @property 'RuleBased'|'TargetBased' $PolicyType
 * @property TargetConfiguration $TargetConfiguration
 * @property 'PENDING_UPDATE' $UpdateStatus
 * @property string $Location
 */
class ScalingPolicy extends Shape
{
    /**
     * @param array{
     *     FleetId?: string,
     *     FleetArn?: string,
     *     Name?: string,
     *     Status?: 'ACTIVE'|'UPDATE_REQUESTED'|'UPDATING'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'ERROR',
     *     ScalingAdjustment?: int,
     *     ScalingAdjustmentType?: 'ChangeInCapacity'|'ExactCapacity'|'PercentChangeInCapacity',
     *     ComparisonOperator?: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold',
     *     Threshold?: double,
     *     EvaluationPeriods?: int,
     *     MetricName?: 'ActivatingGameSessions'|'ActiveGameSessions'|'ActiveInstances'|'AvailableGameSessions'|'AvailablePlayerSessions'|'CurrentPlayerSessions'|'IdleInstances'|'PercentAvailableGameSessions'|'PercentIdleInstances'|'QueueDepth'|'WaitTime'|'ConcurrentActivatableGameSessions',
     *     PolicyType?: 'RuleBased'|'TargetBased',
     *     TargetConfiguration?: TargetConfiguration,
     *     UpdateStatus?: 'PENDING_UPDATE',
     *     Location?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
