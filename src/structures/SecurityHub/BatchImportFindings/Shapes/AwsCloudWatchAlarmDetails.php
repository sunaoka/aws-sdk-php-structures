<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ActionsEnabled
 * @property list<string>|null $AlarmActions
 * @property string|null $AlarmArn
 * @property string|null $AlarmConfigurationUpdatedTimestamp
 * @property string|null $AlarmDescription
 * @property string|null $AlarmName
 * @property string|null $ComparisonOperator
 * @property int|null $DatapointsToAlarm
 * @property list<AwsCloudWatchAlarmDimensionsDetails>|null $Dimensions
 * @property string|null $EvaluateLowSampleCountPercentile
 * @property int|null $EvaluationPeriods
 * @property string|null $ExtendedStatistic
 * @property list<string>|null $InsufficientDataActions
 * @property string|null $MetricName
 * @property string|null $Namespace
 * @property list<string>|null $OkActions
 * @property int|null $Period
 * @property string|null $Statistic
 * @property double|null $Threshold
 * @property string|null $ThresholdMetricId
 * @property string|null $TreatMissingData
 * @property string|null $Unit
 */
class AwsCloudWatchAlarmDetails extends Shape
{
    /**
     * @param array{
     *     ActionsEnabled?: bool|null,
     *     AlarmActions?: list<string>|null,
     *     AlarmArn?: string|null,
     *     AlarmConfigurationUpdatedTimestamp?: string|null,
     *     AlarmDescription?: string|null,
     *     AlarmName?: string|null,
     *     ComparisonOperator?: string|null,
     *     DatapointsToAlarm?: int|null,
     *     Dimensions?: list<AwsCloudWatchAlarmDimensionsDetails>|null,
     *     EvaluateLowSampleCountPercentile?: string|null,
     *     EvaluationPeriods?: int|null,
     *     ExtendedStatistic?: string|null,
     *     InsufficientDataActions?: list<string>|null,
     *     MetricName?: string|null,
     *     Namespace?: string|null,
     *     OkActions?: list<string>|null,
     *     Period?: int|null,
     *     Statistic?: string|null,
     *     Threshold?: double|null,
     *     ThresholdMetricId?: string|null,
     *     TreatMissingData?: string|null,
     *     Unit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
