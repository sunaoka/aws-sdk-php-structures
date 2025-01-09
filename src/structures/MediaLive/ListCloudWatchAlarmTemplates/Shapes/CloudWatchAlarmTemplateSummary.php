<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListCloudWatchAlarmTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
class CloudWatchAlarmTemplateSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     ComparisonOperator: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     DatapointsToAlarm?: int,
     *     Description?: string,
     *     EvaluationPeriods: int,
     *     GroupId: string,
     *     Id: string,
     *     MetricName: string,
     *     ModifiedAt?: \Aws\Api\DateTimeResult,
     *     Name: string,
     *     Period: int,
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
