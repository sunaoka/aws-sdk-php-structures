<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateCloudWatchAlarmTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold' $ComparisonOperator
 * @property int $DatapointsToAlarm
 * @property string $Description
 * @property int $EvaluationPeriods
 * @property string $GroupIdentifier
 * @property string $Identifier
 * @property string $MetricName
 * @property string $Name
 * @property int $Period
 * @property 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum' $Statistic
 * @property 'CLOUDFRONT_DISTRIBUTION'|'MEDIALIVE_MULTIPLEX'|'MEDIALIVE_CHANNEL'|'MEDIALIVE_INPUT_DEVICE'|'MEDIAPACKAGE_CHANNEL'|'MEDIAPACKAGE_ORIGIN_ENDPOINT'|'MEDIACONNECT_FLOW'|'S3_BUCKET' $TargetResourceType
 * @property double $Threshold
 * @property 'notBreaching'|'breaching'|'ignore'|'missing' $TreatMissingData
 */
class UpdateCloudWatchAlarmTemplateRequest extends Request
{
    /**
     * @param array{
     *     ComparisonOperator?: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold',
     *     DatapointsToAlarm?: int,
     *     Description?: string,
     *     EvaluationPeriods?: int,
     *     GroupIdentifier?: string,
     *     Identifier: string,
     *     MetricName?: string,
     *     Name?: string,
     *     Period?: int,
     *     Statistic?: 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum',
     *     TargetResourceType?: 'CLOUDFRONT_DISTRIBUTION'|'MEDIALIVE_MULTIPLEX'|'MEDIALIVE_CHANNEL'|'MEDIALIVE_INPUT_DEVICE'|'MEDIAPACKAGE_CHANNEL'|'MEDIAPACKAGE_ORIGIN_ENDPOINT'|'MEDIACONNECT_FLOW'|'S3_BUCKET',
     *     Threshold?: double,
     *     TreatMissingData?: 'notBreaching'|'breaching'|'ignore'|'missing'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
