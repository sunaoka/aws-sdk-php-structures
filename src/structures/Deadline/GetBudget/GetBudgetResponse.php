<?php

namespace Sunaoka\Aws\Structures\Deadline\GetBudget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ResponseBudgetAction> $actions
 * @property float $approximateDollarLimit
 * @property string $budgetId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string $displayName
 * @property \Aws\Api\DateTimeResult|null $queueStoppedAt
 * @property Shapes\BudgetSchedule $schedule
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property Shapes\UsageTrackingResource $usageTrackingResource
 * @property Shapes\ConsumedUsages $usages
 */
class GetBudgetResponse extends Response
{
}
