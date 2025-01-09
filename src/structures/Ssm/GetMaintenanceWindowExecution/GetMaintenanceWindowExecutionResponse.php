<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WindowExecutionId
 * @property list<string> $TaskIds
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING' $Status
 * @property string $StatusDetails
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class GetMaintenanceWindowExecutionResponse extends Response
{
}
