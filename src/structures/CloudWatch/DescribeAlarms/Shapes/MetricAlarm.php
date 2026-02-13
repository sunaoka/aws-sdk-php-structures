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
 * @property string|null $MetricName
 * @property string|null $Namespace
 * @property 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum'|null $Statistic
 * @property string|null $ExtendedStatistic
 * @property list<Dimension>|null $Dimensions
 * @property int<1, max>|null $Period
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null $Unit
 * @property int<1, max>|null $EvaluationPeriods
 * @property int<1, max>|null $DatapointsToAlarm
 * @property double|null $Threshold
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|'LessThanLowerOrGreaterThanUpperThreshold'|'LessThanLowerThreshold'|'GreaterThanUpperThreshold'|null $ComparisonOperator
 * @property string|null $TreatMissingData
 * @property string|null $EvaluateLowSampleCountPercentile
 * @property list<MetricDataQuery>|null $Metrics
 * @property string|null $ThresholdMetricId
 * @property 'PARTIAL_DATA'|'EVALUATION_FAILURE'|'EVALUATION_ERROR'|null $EvaluationState
 * @property \Aws\Api\DateTimeResult|null $StateTransitionedTimestamp
 */
class MetricAlarm extends Shape
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
     *     MetricName?: string|null,
     *     Namespace?: string|null,
     *     Statistic?: 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum'|null,
     *     ExtendedStatistic?: string|null,
     *     Dimensions?: list<Dimension>|null,
     *     Period?: int<1, max>|null,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null,
     *     EvaluationPeriods?: int<1, max>|null,
     *     DatapointsToAlarm?: int<1, max>|null,
     *     Threshold?: double|null,
     *     ComparisonOperator?: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|'LessThanLowerOrGreaterThanUpperThreshold'|'LessThanLowerThreshold'|'GreaterThanUpperThreshold'|null,
     *     TreatMissingData?: string|null,
     *     EvaluateLowSampleCountPercentile?: string|null,
     *     Metrics?: list<MetricDataQuery>|null,
     *     ThresholdMetricId?: string|null,
     *     EvaluationState?: 'PARTIAL_DATA'|'EVALUATION_FAILURE'|'EVALUATION_ERROR'|null,
     *     StateTransitionedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
