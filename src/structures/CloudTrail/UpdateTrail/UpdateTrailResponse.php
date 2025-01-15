<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateTrail;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $S3BucketName
 * @property string|null $S3KeyPrefix
 * @property string|null $SnsTopicName
 * @property string|null $SnsTopicARN
 * @property bool|null $IncludeGlobalServiceEvents
 * @property bool|null $IsMultiRegionTrail
 * @property string|null $TrailARN
 * @property bool|null $LogFileValidationEnabled
 * @property string|null $CloudWatchLogsLogGroupArn
 * @property string|null $CloudWatchLogsRoleArn
 * @property string|null $KmsKeyId
 * @property bool|null $IsOrganizationTrail
 */
class UpdateTrailResponse extends Response
{
}
