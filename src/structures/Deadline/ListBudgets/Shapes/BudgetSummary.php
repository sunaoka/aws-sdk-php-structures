<?php

namespace Sunaoka\Aws\Structures\Deadline\ListBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $budgetId
 * @property UsageTrackingResource $usageTrackingResource
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property string $displayName
 * @property string $description
 * @property float $approximateDollarLimit
 * @property ConsumedUsages $usages
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $updatedBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class BudgetSummary extends Shape
{
    /**
     * @param array{
     *     budgetId: string,
     *     usageTrackingResource: UsageTrackingResource,
     *     status: 'ACTIVE'|'INACTIVE',
     *     displayName: string,
     *     description?: string,
     *     approximateDollarLimit: float,
     *     usages: ConsumedUsages,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedBy?: string,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
