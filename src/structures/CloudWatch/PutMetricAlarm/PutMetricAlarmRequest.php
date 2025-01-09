<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlarmName
 * @property string $AlarmDescription
 * @property bool $ActionsEnabled
 * @property list<string> $OKActions
 * @property list<string> $AlarmActions
 * @property list<string> $InsufficientDataActions
 * @property string $MetricName
 * @property string $Namespace
 * @property 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum' $Statistic
 * @property string $ExtendedStatistic
 * @property list<Shapes\Dimension> $Dimensions
 * @property int $Period
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $Unit
 * @property int $EvaluationPeriods
 * @property int $DatapointsToAlarm
 * @property double $Threshold
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|'LessThanLowerOrGreaterThanUpperThreshold'|'LessThanLowerThreshold'|'GreaterThanUpperThreshold' $ComparisonOperator
 * @property string $TreatMissingData
 * @property string $EvaluateLowSampleCountPercentile
 * @property list<Shapes\MetricDataQuery> $Metrics
 * @property list<Shapes\Tag> $Tags
 * @property string $ThresholdMetricId
 */
class PutMetricAlarmRequest extends Request
{
    /**
     * @param array{
     *     AlarmName: string,
     *     AlarmDescription?: string,
     *     ActionsEnabled?: bool,
     *     OKActions?: list<string>,
     *     AlarmActions?: list<string>,
     *     InsufficientDataActions?: list<string>,
     *     MetricName?: string,
     *     Namespace?: string,
     *     Statistic?: 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum',
     *     ExtendedStatistic?: string,
     *     Dimensions?: list<Shapes\Dimension>,
     *     Period?: int,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None',
     *     EvaluationPeriods: int,
     *     DatapointsToAlarm?: int,
     *     Threshold?: double,
     *     ComparisonOperator: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|'LessThanLowerOrGreaterThanUpperThreshold'|'LessThanLowerThreshold'|'GreaterThanUpperThreshold',
     *     TreatMissingData?: string,
     *     EvaluateLowSampleCountPercentile?: string,
     *     Metrics?: list<Shapes\MetricDataQuery>,
     *     Tags?: list<Shapes\Tag>,
     *     ThresholdMetricId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
