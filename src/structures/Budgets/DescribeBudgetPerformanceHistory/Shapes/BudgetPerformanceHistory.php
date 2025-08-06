<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetPerformanceHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BudgetName
 * @property 'USAGE'|'COST'|'RI_UTILIZATION'|'RI_COVERAGE'|'SAVINGS_PLANS_UTILIZATION'|'SAVINGS_PLANS_COVERAGE'|null $BudgetType
 * @property array<string, list<string>>|null $CostFilters
 * @property CostTypes|null $CostTypes
 * @property 'DAILY'|'MONTHLY'|'QUARTERLY'|'ANNUALLY'|null $TimeUnit
 * @property string|null $BillingViewArn
 * @property list<BudgetedAndActualAmounts>|null $BudgetedAndActualAmountsList
 */
class BudgetPerformanceHistory extends Shape
{
    /**
     * @param array{
     *     BudgetName?: string|null,
     *     BudgetType?: 'USAGE'|'COST'|'RI_UTILIZATION'|'RI_COVERAGE'|'SAVINGS_PLANS_UTILIZATION'|'SAVINGS_PLANS_COVERAGE'|null,
     *     CostFilters?: array<string, list<string>>|null,
     *     CostTypes?: CostTypes|null,
     *     TimeUnit?: 'DAILY'|'MONTHLY'|'QUARTERLY'|'ANNUALLY'|null,
     *     BillingViewArn?: string|null,
     *     BudgetedAndActualAmountsList?: list<BudgetedAndActualAmounts>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
