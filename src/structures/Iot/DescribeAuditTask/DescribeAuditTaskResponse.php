<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED' $taskStatus
 * @property 'ON_DEMAND_AUDIT_TASK'|'SCHEDULED_AUDIT_TASK' $taskType
 * @property \Aws\Api\DateTimeResult $taskStartTime
 * @property Shapes\TaskStatistics $taskStatistics
 * @property string $scheduledAuditName
 * @property array<string, Shapes\AuditCheckDetails> $auditDetails
 */
class DescribeAuditTaskResponse extends Response
{
}
