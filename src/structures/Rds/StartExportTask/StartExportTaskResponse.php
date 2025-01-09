<?php

namespace Sunaoka\Aws\Structures\Rds\StartExportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ExportTaskIdentifier
 * @property string $SourceArn
 * @property list<string> $ExportOnly
 * @property \Aws\Api\DateTimeResult $SnapshotTime
 * @property \Aws\Api\DateTimeResult $TaskStartTime
 * @property \Aws\Api\DateTimeResult $TaskEndTime
 * @property string $S3Bucket
 * @property string $S3Prefix
 * @property string $IamRoleArn
 * @property string $KmsKeyId
 * @property string $Status
 * @property int $PercentProgress
 * @property int $TotalExtractedDataInGB
 * @property string $FailureCause
 * @property string $WarningMessage
 * @property 'SNAPSHOT'|'CLUSTER' $SourceType
 */
class StartExportTaskResponse extends Response
{
}
