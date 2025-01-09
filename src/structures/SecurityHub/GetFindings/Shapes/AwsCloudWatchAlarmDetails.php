<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ActionsEnabled
 * @property list<string> $AlarmActions
 * @property string $AlarmArn
 * @property string $AlarmConfigurationUpdatedTimestamp
 * @property string $AlarmDescription
 * @property string $AlarmName
 * @property string $ComparisonOperator
 * @property int $DatapointsToAlarm
 * @property list<AwsCloudWatchAlarmDimensionsDetails> $Dimensions
 * @property string $EvaluateLowSampleCountPercentile
 * @property int $EvaluationPeriods
 * @property string $ExtendedStatistic
 * @property list<string> $InsufficientDataActions
 * @property string $MetricName
 * @property string $Namespace
 * @property list<string> $OkActions
 * @property int $Period
 * @property string $Statistic
 * @property double $Threshold
 * @property string $ThresholdMetricId
 * @property string $TreatMissingData
 * @property string $Unit
 */
class AwsCloudWatchAlarmDetails extends Shape
{
    /**
     * @param array{
     *     ActionsEnabled?: bool,
     *     AlarmActions?: list<string>,
     *     AlarmArn?: string,
     *     AlarmConfigurationUpdatedTimestamp?: string,
     *     AlarmDescription?: string,
     *     AlarmName?: string,
     *     ComparisonOperator?: string,
     *     DatapointsToAlarm?: int,
     *     Dimensions?: list<AwsCloudWatchAlarmDimensionsDetails>,
     *     EvaluateLowSampleCountPercentile?: string,
     *     EvaluationPeriods?: int,
     *     ExtendedStatistic?: string,
     *     InsufficientDataActions?: list<string>,
     *     MetricName?: string,
     *     Namespace?: string,
     *     OkActions?: list<string>,
     *     Period?: int,
     *     Statistic?: string,
     *     Threshold?: double,
     *     ThresholdMetricId?: string,
     *     TreatMissingData?: string,
     *     Unit?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
