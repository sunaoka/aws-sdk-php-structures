<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetTrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $S3BucketName
 * @property string $S3KeyPrefix
 * @property string $SnsTopicName
 * @property string $SnsTopicARN
 * @property bool $IncludeGlobalServiceEvents
 * @property bool $IsMultiRegionTrail
 * @property string $HomeRegion
 * @property string $TrailARN
 * @property bool $LogFileValidationEnabled
 * @property string $CloudWatchLogsLogGroupArn
 * @property string $CloudWatchLogsRoleArn
 * @property string $KmsKeyId
 * @property bool $HasCustomEventSelectors
 * @property bool $HasInsightSelectors
 * @property bool $IsOrganizationTrail
 */
class Trail extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     S3BucketName?: string,
     *     S3KeyPrefix?: string,
     *     SnsTopicName?: string,
     *     SnsTopicARN?: string,
     *     IncludeGlobalServiceEvents?: bool,
     *     IsMultiRegionTrail?: bool,
     *     HomeRegion?: string,
     *     TrailARN?: string,
     *     LogFileValidationEnabled?: bool,
     *     CloudWatchLogsLogGroupArn?: string,
     *     CloudWatchLogsRoleArn?: string,
     *     KmsKeyId?: string,
     *     HasCustomEventSelectors?: bool,
     *     HasInsightSelectors?: bool,
     *     IsOrganizationTrail?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
