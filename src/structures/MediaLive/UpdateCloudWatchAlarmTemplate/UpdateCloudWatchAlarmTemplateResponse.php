<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateCloudWatchAlarmTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold' $ComparisonOperator
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property int $DatapointsToAlarm
 * @property string $Description
 * @property int $EvaluationPeriods
 * @property string $GroupId
 * @property string $Id
 * @property string $MetricName
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property string $Name
 * @property int $Period
 * @property 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum' $Statistic
 * @property array<string, string> $Tags
 * @property 'CLOUDFRONT_DISTRIBUTION'|'MEDIALIVE_MULTIPLEX'|'MEDIALIVE_CHANNEL'|'MEDIALIVE_INPUT_DEVICE'|'MEDIAPACKAGE_CHANNEL'|'MEDIAPACKAGE_ORIGIN_ENDPOINT'|'MEDIACONNECT_FLOW'|'S3_BUCKET' $TargetResourceType
 * @property double $Threshold
 * @property 'notBreaching'|'breaching'|'ignore'|'missing' $TreatMissingData
 */
class UpdateCloudWatchAlarmTemplateResponse extends Response
{
}
