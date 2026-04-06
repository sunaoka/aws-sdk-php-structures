<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BudgetName
 * @property Spend|null $BudgetLimit
 * @property array<string, Spend>|null $PlannedBudgetLimits
 * @property array<string, list<string>>|null $CostFilters
 * @property CostTypes|null $CostTypes
 * @property 'DAILY'|'MONTHLY'|'QUARTERLY'|'ANNUALLY' $TimeUnit
 * @property TimePeriod|null $TimePeriod
 * @property CalculatedSpend|null $CalculatedSpend
 * @property 'USAGE'|'COST'|'RI_UTILIZATION'|'RI_COVERAGE'|'SAVINGS_PLANS_UTILIZATION'|'SAVINGS_PLANS_COVERAGE' $BudgetType
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property AutoAdjustData|null $AutoAdjustData
 */
class Budget extends Shape
{
    /**
     * @param array{
     *     BudgetName: string,
     *     BudgetLimit?: Spend|null,
     *     PlannedBudgetLimits?: array<string, Spend>|null,
     *     CostFilters?: array<string, list<string>>|null,
     *     CostTypes?: CostTypes|null,
     *     TimeUnit: 'DAILY'|'MONTHLY'|'QUARTERLY'|'ANNUALLY',
     *     TimePeriod?: TimePeriod|null,
     *     CalculatedSpend?: CalculatedSpend|null,
     *     BudgetType: 'USAGE'|'COST'|'RI_UTILIZATION'|'RI_COVERAGE'|'SAVINGS_PLANS_UTILIZATION'|'SAVINGS_PLANS_COVERAGE',
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     AutoAdjustData?: AutoAdjustData|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
