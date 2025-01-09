<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateTrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $S3BucketName
 * @property string $S3KeyPrefix
 * @property string $SnsTopicName
 * @property bool $IncludeGlobalServiceEvents
 * @property bool $IsMultiRegionTrail
 * @property bool $EnableLogFileValidation
 * @property string $CloudWatchLogsLogGroupArn
 * @property string $CloudWatchLogsRoleArn
 * @property string $KmsKeyId
 * @property bool $IsOrganizationTrail
 */
class UpdateTrailRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     S3BucketName?: string,
     *     S3KeyPrefix?: string,
     *     SnsTopicName?: string,
     *     IncludeGlobalServiceEvents?: bool,
     *     IsMultiRegionTrail?: bool,
     *     EnableLogFileValidation?: bool,
     *     CloudWatchLogsLogGroupArn?: string,
     *     CloudWatchLogsRoleArn?: string,
     *     KmsKeyId?: string,
     *     IsOrganizationTrail?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
