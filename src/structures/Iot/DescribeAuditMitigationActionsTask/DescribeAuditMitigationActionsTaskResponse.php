<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditMitigationActionsTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED' $taskStatus
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property array<string, Shapes\TaskStatisticsForAuditCheck> $taskStatistics
 * @property Shapes\AuditMitigationActionsTaskTarget $target
 * @property array<string, list<string>> $auditCheckToActionsMapping
 * @property list<Shapes\MitigationAction> $actionsDefinition
 */
class DescribeAuditMitigationActionsTaskResponse extends Response
{
}
