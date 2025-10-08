<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgets;

trait DescribeBudgetsTrait
{
    /**
     * @param DescribeBudgetsRequest $args
     * @return DescribeBudgetsResponse
     */
    public function describeBudgets(DescribeBudgetsRequest $args)
    {
        $result = parent::describeBudgets($args->toArray());
        return new DescribeBudgetsResponse($result->toArray());
    }
}
