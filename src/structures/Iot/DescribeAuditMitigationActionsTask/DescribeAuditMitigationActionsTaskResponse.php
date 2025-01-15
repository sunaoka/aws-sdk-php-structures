<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditMitigationActionsTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|null $taskStatus
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property array<string, Shapes\TaskStatisticsForAuditCheck>|null $taskStatistics
 * @property Shapes\AuditMitigationActionsTaskTarget|null $target
 * @property array<string, list<string>>|null $auditCheckToActionsMapping
 * @property list<Shapes\MitigationAction>|null $actionsDefinition
 */
class DescribeAuditMitigationActionsTaskResponse extends Response
{
}
