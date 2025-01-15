<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateTrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $S3BucketName
 * @property string|null $S3KeyPrefix
 * @property string|null $SnsTopicName
 * @property bool|null $IncludeGlobalServiceEvents
 * @property bool|null $IsMultiRegionTrail
 * @property bool|null $EnableLogFileValidation
 * @property string|null $CloudWatchLogsLogGroupArn
 * @property string|null $CloudWatchLogsRoleArn
 * @property string|null $KmsKeyId
 * @property bool|null $IsOrganizationTrail
 * @property list<Shapes\Tag>|null $TagsList
 */
class CreateTrailRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     S3BucketName: string,
     *     S3KeyPrefix?: string|null,
     *     SnsTopicName?: string|null,
     *     IncludeGlobalServiceEvents?: bool|null,
     *     IsMultiRegionTrail?: bool|null,
     *     EnableLogFileValidation?: bool|null,
     *     CloudWatchLogsLogGroupArn?: string|null,
     *     CloudWatchLogsRoleArn?: string|null,
     *     KmsKeyId?: string|null,
     *     IsOrganizationTrail?: bool|null,
     *     TagsList?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
