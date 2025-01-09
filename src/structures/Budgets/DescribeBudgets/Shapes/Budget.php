<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BudgetName
 * @property Spend $BudgetLimit
 * @property array<string, Spend> $PlannedBudgetLimits
 * @property array<string, list<string>> $CostFilters
 * @property CostTypes $CostTypes
 * @property 'DAILY'|'MONTHLY'|'QUARTERLY'|'ANNUALLY' $TimeUnit
 * @property TimePeriod $TimePeriod
 * @property CalculatedSpend $CalculatedSpend
 * @property 'USAGE'|'COST'|'RI_UTILIZATION'|'RI_COVERAGE'|'SAVINGS_PLANS_UTILIZATION'|'SAVINGS_PLANS_COVERAGE' $BudgetType
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property AutoAdjustData $AutoAdjustData
 */
class Budget extends Shape
{
    /**
     * @param array{
     *     BudgetName: string,
     *     BudgetLimit?: Spend,
     *     PlannedBudgetLimits?: array<string, Spend>,
     *     CostFilters?: array<string, list<string>>,
     *     CostTypes?: CostTypes,
     *     TimeUnit: 'DAILY'|'MONTHLY'|'QUARTERLY'|'ANNUALLY',
     *     TimePeriod?: TimePeriod,
     *     CalculatedSpend?: CalculatedSpend,
     *     BudgetType: 'USAGE'|'COST'|'RI_UTILIZATION'|'RI_COVERAGE'|'SAVINGS_PLANS_UTILIZATION'|'SAVINGS_PLANS_COVERAGE',
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     AutoAdjustData?: AutoAdjustData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
