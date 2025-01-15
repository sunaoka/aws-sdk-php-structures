<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetTrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $S3BucketName
 * @property string|null $S3KeyPrefix
 * @property string|null $SnsTopicName
 * @property string|null $SnsTopicARN
 * @property bool|null $IncludeGlobalServiceEvents
 * @property bool|null $IsMultiRegionTrail
 * @property string|null $HomeRegion
 * @property string|null $TrailARN
 * @property bool|null $LogFileValidationEnabled
 * @property string|null $CloudWatchLogsLogGroupArn
 * @property string|null $CloudWatchLogsRoleArn
 * @property string|null $KmsKeyId
 * @property bool|null $HasCustomEventSelectors
 * @property bool|null $HasInsightSelectors
 * @property bool|null $IsOrganizationTrail
 */
class Trail extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     S3BucketName?: string|null,
     *     S3KeyPrefix?: string|null,
     *     SnsTopicName?: string|null,
     *     SnsTopicARN?: string|null,
     *     IncludeGlobalServiceEvents?: bool|null,
     *     IsMultiRegionTrail?: bool|null,
     *     HomeRegion?: string|null,
     *     TrailARN?: string|null,
     *     LogFileValidationEnabled?: bool|null,
     *     CloudWatchLogsLogGroupArn?: string|null,
     *     CloudWatchLogsRoleArn?: string|null,
     *     KmsKeyId?: string|null,
     *     HasCustomEventSelectors?: bool|null,
     *     HasInsightSelectors?: bool|null,
     *     IsOrganizationTrail?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
