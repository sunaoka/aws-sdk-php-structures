<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WindowExecutionId
 * @property list<string>|null $TaskIds
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING'|null $Status
 * @property string|null $StatusDetails
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class GetMaintenanceWindowExecutionResponse extends Response
{
}
