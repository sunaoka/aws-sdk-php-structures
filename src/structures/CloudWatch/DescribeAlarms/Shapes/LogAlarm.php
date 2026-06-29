<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AlarmName
 * @property string|null $AlarmArn
 * @property string|null $AlarmDescription
 * @property \Aws\Api\DateTimeResult|null $AlarmConfigurationUpdatedTimestamp
 * @property bool|null $ActionsEnabled
 * @property list<string>|null $OKActions
 * @property list<string>|null $AlarmActions
 * @property list<string>|null $InsufficientDataActions
 * @property 'OK'|'ALARM'|'INSUFFICIENT_DATA'|null $StateValue
 * @property string|null $StateReason
 * @property string|null $StateReasonData
 * @property \Aws\Api\DateTimeResult|null $StateUpdatedTimestamp
 * @property ScheduledQueryConfiguration|null $ScheduledQueryConfiguration
 * @property int<1, max>|null $QueryResultsToEvaluate
 * @property int<1, max>|null $QueryResultsToAlarm
 * @property double|null $Threshold
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|'LessThanLowerOrGreaterThanUpperThreshold'|'LessThanLowerThreshold'|'GreaterThanUpperThreshold'|null $ComparisonOperator
 * @property string|null $TreatMissingData
 * @property \Aws\Api\DateTimeResult|null $StateTransitionedTimestamp
 * @property 'PARTIAL_DATA'|'EVALUATION_FAILURE'|'EVALUATION_ERROR'|null $EvaluationState
 * @property int|null $ActionLogLineCount
 * @property string|null $ActionLogLineRoleArn
 */
class LogAlarm extends Shape
{
    /**
     * @param array{
     *     AlarmName?: string|null,
     *     AlarmArn?: string|null,
     *     AlarmDescription?: string|null,
     *     AlarmConfigurationUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ActionsEnabled?: bool|null,
     *     OKActions?: list<string>|null,
     *     AlarmActions?: list<string>|null,
     *     InsufficientDataActions?: list<string>|null,
     *     StateValue?: 'OK'|'ALARM'|'INSUFFICIENT_DATA'|null,
     *     StateReason?: string|null,
     *     StateReasonData?: string|null,
     *     StateUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ScheduledQueryConfiguration?: ScheduledQueryConfiguration|null,
     *     QueryResultsToEvaluate?: int<1, max>|null,
     *     QueryResultsToAlarm?: int<1, max>|null,
     *     Threshold?: double|null,
     *     ComparisonOperator?: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|'LessThanLowerOrGreaterThanUpperThreshold'|'LessThanLowerThreshold'|'GreaterThanUpperThreshold'|null,
     *     TreatMissingData?: string|null,
     *     StateTransitionedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     EvaluationState?: 'PARTIAL_DATA'|'EVALUATION_FAILURE'|'EVALUATION_ERROR'|null,
     *     ActionLogLineCount?: int|null,
     *     ActionLogLineRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
