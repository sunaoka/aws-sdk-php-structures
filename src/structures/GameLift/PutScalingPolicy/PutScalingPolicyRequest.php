<?php

namespace Sunaoka\Aws\Structures\GameLift\PutScalingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $FleetId
 * @property int|null $ScalingAdjustment
 * @property 'ChangeInCapacity'|'ExactCapacity'|'PercentChangeInCapacity'|null $ScalingAdjustmentType
 * @property double|null $Threshold
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|null $ComparisonOperator
 * @property int<1, max>|null $EvaluationPeriods
 * @property 'ActivatingGameSessions'|'ActiveGameSessions'|'ActiveInstances'|'AvailableGameSessions'|'AvailablePlayerSessions'|'CurrentPlayerSessions'|'IdleInstances'|'PercentAvailableGameSessions'|'PercentIdleInstances'|'QueueDepth'|'WaitTime'|'ConcurrentActivatableGameSessions' $MetricName
 * @property 'RuleBased'|'TargetBased'|null $PolicyType
 * @property Shapes\TargetConfiguration|null $TargetConfiguration
 */
class PutScalingPolicyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     FleetId: string,
     *     ScalingAdjustment?: int|null,
     *     ScalingAdjustmentType?: 'ChangeInCapacity'|'ExactCapacity'|'PercentChangeInCapacity'|null,
     *     Threshold?: double|null,
     *     ComparisonOperator?: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|null,
     *     EvaluationPeriods?: int<1, max>|null,
     *     MetricName: 'ActivatingGameSessions'|'ActiveGameSessions'|'ActiveInstances'|'AvailableGameSessions'|'AvailablePlayerSessions'|'CurrentPlayerSessions'|'IdleInstances'|'PercentAvailableGameSessions'|'PercentIdleInstances'|'QueueDepth'|'WaitTime'|'ConcurrentActivatableGameSessions',
     *     PolicyType?: 'RuleBased'|'TargetBased'|null,
     *     TargetConfiguration?: Shapes\TargetConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
