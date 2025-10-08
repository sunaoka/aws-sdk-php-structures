<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionsForBudget;

trait DescribeBudgetActionsForBudgetTrait
{
    /**
     * @param DescribeBudgetActionsForBudgetRequest $args
     * @return DescribeBudgetActionsForBudgetResponse
     */
    public function describeBudgetActionsForBudget(DescribeBudgetActionsForBudgetRequest $args)
    {
        $result = parent::describeBudgetActionsForBudget($args->toArray());
        return new DescribeBudgetActionsForBudgetResponse($result->toArray());
    }
}
