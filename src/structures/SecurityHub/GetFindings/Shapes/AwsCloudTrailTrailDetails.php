<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CloudWatchLogsLogGroupArn
 * @property string $CloudWatchLogsRoleArn
 * @property bool $HasCustomEventSelectors
 * @property string $HomeRegion
 * @property bool $IncludeGlobalServiceEvents
 * @property bool $IsMultiRegionTrail
 * @property bool $IsOrganizationTrail
 * @property string $KmsKeyId
 * @property bool $LogFileValidationEnabled
 * @property string $Name
 * @property string $S3BucketName
 * @property string $S3KeyPrefix
 * @property string $SnsTopicArn
 * @property string $SnsTopicName
 * @property string $TrailArn
 */
class AwsCloudTrailTrailDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsLogGroupArn?: string,
     *     CloudWatchLogsRoleArn?: string,
     *     HasCustomEventSelectors?: bool,
     *     HomeRegion?: string,
     *     IncludeGlobalServiceEvents?: bool,
     *     IsMultiRegionTrail?: bool,
     *     IsOrganizationTrail?: bool,
     *     KmsKeyId?: string,
     *     LogFileValidationEnabled?: bool,
     *     Name?: string,
     *     S3BucketName?: string,
     *     S3KeyPrefix?: string,
     *     SnsTopicArn?: string,
     *     SnsTopicName?: string,
     *     TrailArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
