<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED' $JobStatus
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property Shapes\SnapshotJobResult $Result
 * @property Shapes\SnapshotJobErrorInfo $ErrorInfo
 * @property string $RequestId
 * @property int $Status
 */
class DescribeDashboardSnapshotJobResultResponse extends Response
{
}
