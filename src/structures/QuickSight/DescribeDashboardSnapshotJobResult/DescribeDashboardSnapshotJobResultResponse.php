<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|null $JobStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property Shapes\SnapshotJobResult|null $Result
 * @property Shapes\SnapshotJobErrorInfo|null $ErrorInfo
 * @property string|null $RequestId
 * @property int|null $Status
 */
class DescribeDashboardSnapshotJobResultResponse extends Response
{
}
