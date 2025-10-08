<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudget;

trait DescribeBudgetTrait
{
    /**
     * @param DescribeBudgetRequest $args
     * @return DescribeBudgetResponse
     */
    public function describeBudget(DescribeBudgetRequest $args)
    {
        $result = parent::describeBudget($args->toArray());
        return new DescribeBudgetResponse($result->toArray());
    }
}
