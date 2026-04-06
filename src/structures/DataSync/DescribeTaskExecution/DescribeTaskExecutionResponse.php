<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TaskExecutionArn
 * @property 'QUEUED'|'LAUNCHING'|'PREPARING'|'TRANSFERRING'|'VERIFYING'|'SUCCESS'|'ERROR'|null $Status
 * @property Shapes\Options|null $Options
 * @property list<Shapes\FilterRule>|null $Excludes
 * @property list<Shapes\FilterRule>|null $Includes
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property int|null $EstimatedFilesToTransfer
 * @property int|null $EstimatedBytesToTransfer
 * @property int|null $FilesTransferred
 * @property int|null $BytesWritten
 * @property int|null $BytesTransferred
 * @property Shapes\TaskExecutionResultDetail|null $Result
 * @property int|null $BytesCompressed
 */
class DescribeTaskExecutionResponse extends Response
{
}
