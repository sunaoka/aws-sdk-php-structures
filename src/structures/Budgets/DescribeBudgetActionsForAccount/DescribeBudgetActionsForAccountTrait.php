<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionsForAccount;

trait DescribeBudgetActionsForAccountTrait
{
    /**
     * @param DescribeBudgetActionsForAccountRequest $args
     * @return DescribeBudgetActionsForAccountResponse
     */
    public function describeBudgetActionsForAccount(DescribeBudgetActionsForAccountRequest $args)
    {
        $result = parent::describeBudgetActionsForAccount($args->toArray());
        return new DescribeBudgetActionsForAccountResponse($result->toArray());
    }
}
