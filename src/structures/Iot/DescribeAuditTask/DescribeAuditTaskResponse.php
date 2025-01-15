<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|null $taskStatus
 * @property 'ON_DEMAND_AUDIT_TASK'|'SCHEDULED_AUDIT_TASK'|null $taskType
 * @property \Aws\Api\DateTimeResult|null $taskStartTime
 * @property Shapes\TaskStatistics|null $taskStatistics
 * @property string|null $scheduledAuditName
 * @property array<string, Shapes\AuditCheckDetails>|null $auditDetails
 */
class DescribeAuditTaskResponse extends Response
{
}
