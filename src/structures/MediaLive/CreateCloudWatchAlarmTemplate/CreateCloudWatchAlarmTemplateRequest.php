<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateCloudWatchAlarmTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold' $ComparisonOperator
 * @property int<1, max> $DatapointsToAlarm
 * @property string $Description
 * @property int<1, max> $EvaluationPeriods
 * @property string $GroupIdentifier
 * @property string $MetricName
 * @property string $Name
 * @property int<10, 86400> $Period
 * @property 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum' $Statistic
 * @property array<string, string> $Tags
 * @property 'CLOUDFRONT_DISTRIBUTION'|'MEDIALIVE_MULTIPLEX'|'MEDIALIVE_CHANNEL'|'MEDIALIVE_INPUT_DEVICE'|'MEDIAPACKAGE_CHANNEL'|'MEDIAPACKAGE_ORIGIN_ENDPOINT'|'MEDIACONNECT_FLOW'|'S3_BUCKET' $TargetResourceType
 * @property double $Threshold
 * @property 'notBreaching'|'breaching'|'ignore'|'missing' $TreatMissingData
 */
class CreateCloudWatchAlarmTemplateRequest extends Request
{
    /**
     * @param array{
     *     ComparisonOperator: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold',
     *     DatapointsToAlarm?: int<1, max>,
     *     Description?: string,
     *     EvaluationPeriods: int<1, max>,
     *     GroupIdentifier: string,
     *     MetricName: string,
     *     Name: string,
     *     Period: int<10, 86400>,
     *     Statistic: 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum',
     *     Tags?: array<string, string>,
     *     TargetResourceType: 'CLOUDFRONT_DISTRIBUTION'|'MEDIALIVE_MULTIPLEX'|'MEDIALIVE_CHANNEL'|'MEDIALIVE_INPUT_DEVICE'|'MEDIAPACKAGE_CHANNEL'|'MEDIAPACKAGE_ORIGIN_ENDPOINT'|'MEDIACONNECT_FLOW'|'S3_BUCKET',
     *     Threshold: double,
     *     TreatMissingData: 'notBreaching'|'breaching'|'ignore'|'missing'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
