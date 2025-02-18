<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateCloudWatchAlarmTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|null $ComparisonOperator
 * @property int<1, max>|null $DatapointsToAlarm
 * @property string|null $Description
 * @property int<1, max>|null $EvaluationPeriods
 * @property string|null $GroupIdentifier
 * @property string $Identifier
 * @property string|null $MetricName
 * @property string|null $Name
 * @property int<10, 86400>|null $Period
 * @property 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum'|null $Statistic
 * @property 'CLOUDFRONT_DISTRIBUTION'|'MEDIALIVE_MULTIPLEX'|'MEDIALIVE_CHANNEL'|'MEDIALIVE_INPUT_DEVICE'|'MEDIAPACKAGE_CHANNEL'|'MEDIAPACKAGE_ORIGIN_ENDPOINT'|'MEDIACONNECT_FLOW'|'S3_BUCKET'|'MEDIATAILOR_PLAYBACK_CONFIGURATION'|null $TargetResourceType
 * @property double|null $Threshold
 * @property 'notBreaching'|'breaching'|'ignore'|'missing'|null $TreatMissingData
 */
class UpdateCloudWatchAlarmTemplateRequest extends Request
{
    /**
     * @param array{
     *     ComparisonOperator?: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|null,
     *     DatapointsToAlarm?: int<1, max>|null,
     *     Description?: string|null,
     *     EvaluationPeriods?: int<1, max>|null,
     *     GroupIdentifier?: string|null,
     *     Identifier: string,
     *     MetricName?: string|null,
     *     Name?: string|null,
     *     Period?: int<10, 86400>|null,
     *     Statistic?: 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum'|null,
     *     TargetResourceType?: 'CLOUDFRONT_DISTRIBUTION'|'MEDIALIVE_MULTIPLEX'|'MEDIALIVE_CHANNEL'|'MEDIALIVE_INPUT_DEVICE'|'MEDIAPACKAGE_CHANNEL'|'MEDIAPACKAGE_ORIGIN_ENDPOINT'|'MEDIACONNECT_FLOW'|'S3_BUCKET'|'MEDIATAILOR_PLAYBACK_CONFIGURATION'|null,
     *     Threshold?: double|null,
     *     TreatMissingData?: 'notBreaching'|'breaching'|'ignore'|'missing'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
