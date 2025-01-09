<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeMailboxExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EntityId
 * @property string $Description
 * @property string $RoleArn
 * @property string $KmsKeyArn
 * @property string $S3BucketName
 * @property string $S3Prefix
 * @property string $S3Path
 * @property int<0, 100> $EstimatedProgress
 * @property 'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED' $State
 * @property string $ErrorInfo
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class DescribeMailboxExportJobResponse extends Response
{
}
