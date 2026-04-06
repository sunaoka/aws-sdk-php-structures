<?php

namespace Sunaoka\Aws\Structures\Deadline\GetBudget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $budgetId
 * @property Shapes\UsageTrackingResource $usageTrackingResource
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property string $displayName
 * @property string|null $description
 * @property float $approximateDollarLimit
 * @property Shapes\ConsumedUsages $usages
 * @property list<Shapes\ResponseBudgetAction> $actions
 * @property Shapes\BudgetSchedule $schedule
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $updatedBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property \Aws\Api\DateTimeResult|null $queueStoppedAt
 */
class GetBudgetResponse extends Response
{
}
