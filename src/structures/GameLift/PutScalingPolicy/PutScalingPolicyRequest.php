<?php

namespace Sunaoka\Aws\Structures\GameLift\PutScalingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $FleetId
 * @property int $ScalingAdjustment
 * @property 'ChangeInCapacity'|'ExactCapacity'|'PercentChangeInCapacity' $ScalingAdjustmentType
 * @property double $Threshold
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold' $ComparisonOperator
 * @property int<1, max> $EvaluationPeriods
 * @property 'ActivatingGameSessions'|'ActiveGameSessions'|'ActiveInstances'|'AvailableGameSessions'|'AvailablePlayerSessions'|'CurrentPlayerSessions'|'IdleInstances'|'PercentAvailableGameSessions'|'PercentIdleInstances'|'QueueDepth'|'WaitTime'|'ConcurrentActivatableGameSessions' $MetricName
 * @property 'RuleBased'|'TargetBased' $PolicyType
 * @property Shapes\TargetConfiguration $TargetConfiguration
 */
class PutScalingPolicyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     FleetId: string,
     *     ScalingAdjustment?: int,
     *     ScalingAdjustmentType?: 'ChangeInCapacity'|'ExactCapacity'|'PercentChangeInCapacity',
     *     Threshold?: double,
     *     ComparisonOperator?: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold',
     *     EvaluationPeriods?: int<1, max>,
     *     MetricName: 'ActivatingGameSessions'|'ActiveGameSessions'|'ActiveInstances'|'AvailableGameSessions'|'AvailablePlayerSessions'|'CurrentPlayerSessions'|'IdleInstances'|'PercentAvailableGameSessions'|'PercentIdleInstances'|'QueueDepth'|'WaitTime'|'ConcurrentActivatableGameSessions',
     *     PolicyType?: 'RuleBased'|'TargetBased',
     *     TargetConfiguration?: Shapes\TargetConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
