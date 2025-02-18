<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateCloudWatchAlarmTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|null $ComparisonOperator
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property int<1, max>|null $DatapointsToAlarm
 * @property string|null $Description
 * @property int<1, max>|null $EvaluationPeriods
 * @property string|null $GroupId
 * @property string|null $Id
 * @property string|null $MetricName
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property string|null $Name
 * @property int<10, 86400>|null $Period
 * @property 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum'|null $Statistic
 * @property array<string, string>|null $Tags
 * @property 'CLOUDFRONT_DISTRIBUTION'|'MEDIALIVE_MULTIPLEX'|'MEDIALIVE_CHANNEL'|'MEDIALIVE_INPUT_DEVICE'|'MEDIAPACKAGE_CHANNEL'|'MEDIAPACKAGE_ORIGIN_ENDPOINT'|'MEDIACONNECT_FLOW'|'S3_BUCKET'|'MEDIATAILOR_PLAYBACK_CONFIGURATION'|null $TargetResourceType
 * @property double|null $Threshold
 * @property 'notBreaching'|'breaching'|'ignore'|'missing'|null $TreatMissingData
 */
class CreateCloudWatchAlarmTemplateResponse extends Response
{
}
