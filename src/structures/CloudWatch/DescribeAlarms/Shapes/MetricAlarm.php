<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AlarmName
 * @property string $AlarmArn
 * @property string $AlarmDescription
 * @property \Aws\Api\DateTimeResult $AlarmConfigurationUpdatedTimestamp
 * @property bool $ActionsEnabled
 * @property list<string> $OKActions
 * @property list<string> $AlarmActions
 * @property list<string> $InsufficientDataActions
 * @property 'OK'|'ALARM'|'INSUFFICIENT_DATA' $StateValue
 * @property string $StateReason
 * @property string $StateReasonData
 * @property \Aws\Api\DateTimeResult $StateUpdatedTimestamp
 * @property string $MetricName
 * @property string $Namespace
 * @property 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum' $Statistic
 * @property string $ExtendedStatistic
 * @property list<Dimension> $Dimensions
 * @property int<1, max> $Period
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $Unit
 * @property int<1, max> $EvaluationPeriods
 * @property int<1, max> $DatapointsToAlarm
 * @property double $Threshold
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|'LessThanLowerOrGreaterThanUpperThreshold'|'LessThanLowerThreshold'|'GreaterThanUpperThreshold' $ComparisonOperator
 * @property string $TreatMissingData
 * @property string $EvaluateLowSampleCountPercentile
 * @property list<MetricDataQuery> $Metrics
 * @property string $ThresholdMetricId
 * @property 'PARTIAL_DATA' $EvaluationState
 * @property \Aws\Api\DateTimeResult $StateTransitionedTimestamp
 */
class MetricAlarm extends Shape
{
    /**
     * @param array{
     *     AlarmName?: string,
     *     AlarmArn?: string,
     *     AlarmDescription?: string,
     *     AlarmConfigurationUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ActionsEnabled?: bool,
     *     OKActions?: list<string>,
     *     AlarmActions?: list<string>,
     *     InsufficientDataActions?: list<string>,
     *     StateValue?: 'OK'|'ALARM'|'INSUFFICIENT_DATA',
     *     StateReason?: string,
     *     StateReasonData?: string,
     *     StateUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     MetricName?: string,
     *     Namespace?: string,
     *     Statistic?: 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum',
     *     ExtendedStatistic?: string,
     *     Dimensions?: list<Dimension>,
     *     Period?: int<1, max>,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None',
     *     EvaluationPeriods?: int<1, max>,
     *     DatapointsToAlarm?: int<1, max>,
     *     Threshold?: double,
     *     ComparisonOperator?: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|'LessThanLowerOrGreaterThanUpperThreshold'|'LessThanLowerThreshold'|'GreaterThanUpperThreshold',
     *     TreatMissingData?: string,
     *     EvaluateLowSampleCountPercentile?: string,
     *     Metrics?: list<MetricDataQuery>,
     *     ThresholdMetricId?: string,
     *     EvaluationState?: 'PARTIAL_DATA',
     *     StateTransitionedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
