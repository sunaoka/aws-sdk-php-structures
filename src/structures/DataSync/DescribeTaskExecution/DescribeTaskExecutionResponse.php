<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TaskExecutionArn
 * @property 'QUEUED'|'CANCELLING'|'LAUNCHING'|'PREPARING'|'TRANSFERRING'|'VERIFYING'|'SUCCESS'|'ERROR'|null $Status
 * @property Shapes\Options|null $Options
 * @property list<Shapes\FilterRule>|null $Excludes
 * @property list<Shapes\FilterRule>|null $Includes
 * @property Shapes\ManifestConfig|null $ManifestConfig
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property int|null $EstimatedFilesToTransfer
 * @property int|null $EstimatedBytesToTransfer
 * @property int|null $FilesTransferred
 * @property int|null $BytesWritten
 * @property int|null $BytesTransferred
 * @property int|null $BytesCompressed
 * @property Shapes\TaskExecutionResultDetail|null $Result
 * @property Shapes\TaskReportConfig|null $TaskReportConfig
 * @property int|null $FilesDeleted
 * @property int|null $FilesSkipped
 * @property int|null $FilesVerified
 * @property Shapes\ReportResult|null $ReportResult
 * @property int|null $EstimatedFilesToDelete
 * @property 'BASIC'|'ENHANCED'|null $TaskMode
 * @property int|null $FilesPrepared
 * @property Shapes\TaskExecutionFilesListedDetail|null $FilesListed
 * @property Shapes\TaskExecutionFilesFailedDetail|null $FilesFailed
 * @property \Aws\Api\DateTimeResult|null $LaunchTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class DescribeTaskExecutionResponse extends Response
{
}
