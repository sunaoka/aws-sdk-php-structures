<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlarmName
 * @property string|null $AlarmDescription
 * @property bool|null $ActionsEnabled
 * @property list<string>|null $OKActions
 * @property list<string>|null $AlarmActions
 * @property list<string>|null $InsufficientDataActions
 * @property string|null $MetricName
 * @property string|null $Namespace
 * @property 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum'|null $Statistic
 * @property string|null $ExtendedStatistic
 * @property list<Shapes\Dimension>|null $Dimensions
 * @property int<1, max>|null $Period
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null $Unit
 * @property int<1, max>|null $EvaluationPeriods
 * @property int<1, max>|null $DatapointsToAlarm
 * @property double|null $Threshold
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|'LessThanLowerOrGreaterThanUpperThreshold'|'LessThanLowerThreshold'|'GreaterThanUpperThreshold'|null $ComparisonOperator
 * @property string|null $TreatMissingData
 * @property string|null $EvaluateLowSampleCountPercentile
 * @property list<Shapes\MetricDataQuery>|null $Metrics
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ThresholdMetricId
 * @property Shapes\EvaluationCriteria|null $EvaluationCriteria
 * @property int<10, 3600>|null $EvaluationInterval
 */
class PutMetricAlarmRequest extends Request
{
    /**
     * @param array{
     *     AlarmName: string,
     *     AlarmDescription?: string|null,
     *     ActionsEnabled?: bool|null,
     *     OKActions?: list<string>|null,
     *     AlarmActions?: list<string>|null,
     *     InsufficientDataActions?: list<string>|null,
     *     MetricName?: string|null,
     *     Namespace?: string|null,
     *     Statistic?: 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum'|null,
     *     ExtendedStatistic?: string|null,
     *     Dimensions?: list<Shapes\Dimension>|null,
     *     Period?: int<1, max>|null,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null,
     *     EvaluationPeriods?: int<1, max>|null,
     *     DatapointsToAlarm?: int<1, max>|null,
     *     Threshold?: double|null,
     *     ComparisonOperator?: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|'LessThanLowerOrGreaterThanUpperThreshold'|'LessThanLowerThreshold'|'GreaterThanUpperThreshold'|null,
     *     TreatMissingData?: string|null,
     *     EvaluateLowSampleCountPercentile?: string|null,
     *     Metrics?: list<Shapes\MetricDataQuery>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ThresholdMetricId?: string|null,
     *     EvaluationCriteria?: Shapes\EvaluationCriteria|null,
     *     EvaluationInterval?: int<10, 3600>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
