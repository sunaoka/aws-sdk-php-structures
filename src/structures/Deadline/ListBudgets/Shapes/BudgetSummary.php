<?php

namespace Sunaoka\Aws\Structures\Deadline\ListBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $approximateDollarLimit
 * @property string $budgetId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string $displayName
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property UsageTrackingResource $usageTrackingResource
 * @property ConsumedUsages $usages
 */
class BudgetSummary extends Shape
{
    /**
     * @param array{
     *     approximateDollarLimit: float,
     *     budgetId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     description?: string|null,
     *     displayName: string,
     *     status: 'ACTIVE'|'INACTIVE',
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     usageTrackingResource: UsageTrackingResource,
     *     usages: ConsumedUsages
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
