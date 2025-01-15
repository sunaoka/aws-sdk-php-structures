<?php

namespace Sunaoka\Aws\Structures\Deadline\ListBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $budgetId
 * @property UsageTrackingResource $usageTrackingResource
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property string $displayName
 * @property string|null $description
 * @property float $approximateDollarLimit
 * @property ConsumedUsages $usages
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $updatedBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class BudgetSummary extends Shape
{
    /**
     * @param array{
     *     budgetId: string,
     *     usageTrackingResource: UsageTrackingResource,
     *     status: 'ACTIVE'|'INACTIVE',
     *     displayName: string,
     *     description?: string|null,
     *     approximateDollarLimit: float,
     *     usages: ConsumedUsages,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedBy?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
