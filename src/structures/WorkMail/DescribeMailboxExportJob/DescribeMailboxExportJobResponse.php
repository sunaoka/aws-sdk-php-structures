<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeMailboxExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EntityId
 * @property string|null $Description
 * @property string|null $RoleArn
 * @property string|null $KmsKeyArn
 * @property string|null $S3BucketName
 * @property string|null $S3Prefix
 * @property string|null $S3Path
 * @property int<0, 100>|null $EstimatedProgress
 * @property 'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $State
 * @property string|null $ErrorInfo
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class DescribeMailboxExportJobResponse extends Response
{
}
