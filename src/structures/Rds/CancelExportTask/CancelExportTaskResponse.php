<?php

namespace Sunaoka\Aws\Structures\Rds\CancelExportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ExportTaskIdentifier
 * @property string|null $SourceArn
 * @property list<string>|null $ExportOnly
 * @property \Aws\Api\DateTimeResult|null $SnapshotTime
 * @property \Aws\Api\DateTimeResult|null $TaskStartTime
 * @property \Aws\Api\DateTimeResult|null $TaskEndTime
 * @property string|null $S3Bucket
 * @property string|null $S3Prefix
 * @property string|null $IamRoleArn
 * @property string|null $KmsKeyId
 * @property string|null $Status
 * @property int|null $PercentProgress
 * @property int|null $TotalExtractedDataInGB
 * @property string|null $FailureCause
 * @property string|null $WarningMessage
 * @property 'SNAPSHOT'|'CLUSTER'|null $SourceType
 */
class CancelExportTaskResponse extends Response
{
}
