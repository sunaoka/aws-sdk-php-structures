<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TaskExecutionArn
 * @property 'QUEUED'|'CANCELLING'|'LAUNCHING'|'PREPARING'|'TRANSFERRING'|'VERIFYING'|'SUCCESS'|'ERROR' $Status
 * @property Shapes\Options $Options
 * @property list<Shapes\FilterRule> $Excludes
 * @property list<Shapes\FilterRule> $Includes
 * @property Shapes\ManifestConfig $ManifestConfig
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property int $EstimatedFilesToTransfer
 * @property int $EstimatedBytesToTransfer
 * @property int $FilesTransferred
 * @property int $BytesWritten
 * @property int $BytesTransferred
 * @property int $BytesCompressed
 * @property Shapes\TaskExecutionResultDetail $Result
 * @property Shapes\TaskReportConfig $TaskReportConfig
 * @property int $FilesDeleted
 * @property int $FilesSkipped
 * @property int $FilesVerified
 * @property Shapes\ReportResult $ReportResult
 * @property int $EstimatedFilesToDelete
 * @property 'BASIC'|'ENHANCED' $TaskMode
 * @property int $FilesPrepared
 * @property Shapes\TaskExecutionFilesListedDetail $FilesListed
 * @property Shapes\TaskExecutionFilesFailedDetail $FilesFailed
 */
class DescribeTaskExecutionResponse extends Response
{
}
