<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CloudWatchLogsLogGroupArn
 * @property string|null $CloudWatchLogsRoleArn
 * @property bool|null $HasCustomEventSelectors
 * @property string|null $HomeRegion
 * @property bool|null $IncludeGlobalServiceEvents
 * @property bool|null $IsMultiRegionTrail
 * @property bool|null $IsOrganizationTrail
 * @property string|null $KmsKeyId
 * @property bool|null $LogFileValidationEnabled
 * @property string|null $Name
 * @property string|null $S3BucketName
 * @property string|null $S3KeyPrefix
 * @property string|null $SnsTopicArn
 * @property string|null $SnsTopicName
 * @property string|null $TrailArn
 */
class AwsCloudTrailTrailDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsLogGroupArn?: string|null,
     *     CloudWatchLogsRoleArn?: string|null,
     *     HasCustomEventSelectors?: bool|null,
     *     HomeRegion?: string|null,
     *     IncludeGlobalServiceEvents?: bool|null,
     *     IsMultiRegionTrail?: bool|null,
     *     IsOrganizationTrail?: bool|null,
     *     KmsKeyId?: string|null,
     *     LogFileValidationEnabled?: bool|null,
     *     Name?: string|null,
     *     S3BucketName?: string|null,
     *     S3KeyPrefix?: string|null,
     *     SnsTopicArn?: string|null,
     *     SnsTopicName?: string|null,
     *     TrailArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
