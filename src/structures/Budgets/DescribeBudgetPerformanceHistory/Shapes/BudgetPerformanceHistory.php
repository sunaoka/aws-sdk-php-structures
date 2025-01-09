<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetPerformanceHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BudgetName
 * @property 'USAGE'|'COST'|'RI_UTILIZATION'|'RI_COVERAGE'|'SAVINGS_PLANS_UTILIZATION'|'SAVINGS_PLANS_COVERAGE' $BudgetType
 * @property array<string, list<string>> $CostFilters
 * @property CostTypes $CostTypes
 * @property 'DAILY'|'MONTHLY'|'QUARTERLY'|'ANNUALLY' $TimeUnit
 * @property list<BudgetedAndActualAmounts> $BudgetedAndActualAmountsList
 */
class BudgetPerformanceHistory extends Shape
{
    /**
     * @param array{
     *     BudgetName?: string,
     *     BudgetType?: 'USAGE'|'COST'|'RI_UTILIZATION'|'RI_COVERAGE'|'SAVINGS_PLANS_UTILIZATION'|'SAVINGS_PLANS_COVERAGE',
     *     CostFilters?: array<string, list<string>>,
     *     CostTypes?: CostTypes,
     *     TimeUnit?: 'DAILY'|'MONTHLY'|'QUARTERLY'|'ANNUALLY',
     *     BudgetedAndActualAmountsList?: list<BudgetedAndActualAmounts>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
