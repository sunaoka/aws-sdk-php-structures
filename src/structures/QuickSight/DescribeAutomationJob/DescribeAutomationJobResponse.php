<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAutomationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property 'FAILED'|'RUNNING'|'SUCCEEDED'|'QUEUED'|'STOPPED' $JobStatus
 * @property string|null $InputPayload
 * @property string|null $OutputPayload
 * @property string|null $RequestId
 */
class DescribeAutomationJobResponse extends Response
{
}
