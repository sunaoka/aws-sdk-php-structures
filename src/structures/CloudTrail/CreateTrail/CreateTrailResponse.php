<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateTrail;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $S3BucketName
 * @property string $S3KeyPrefix
 * @property string $SnsTopicName
 * @property string $SnsTopicARN
 * @property bool $IncludeGlobalServiceEvents
 * @property bool $IsMultiRegionTrail
 * @property string $TrailARN
 * @property bool $LogFileValidationEnabled
 * @property string $CloudWatchLogsLogGroupArn
 * @property string $CloudWatchLogsRoleArn
 * @property string $KmsKeyId
 * @property bool $IsOrganizationTrail
 */
class CreateTrailResponse extends Response
{
}
