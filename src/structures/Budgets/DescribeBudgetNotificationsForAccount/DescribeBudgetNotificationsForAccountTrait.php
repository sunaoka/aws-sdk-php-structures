<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetNotificationsForAccount;

trait DescribeBudgetNotificationsForAccountTrait
{
    /**
     * @param DescribeBudgetNotificationsForAccountRequest $args
     * @return DescribeBudgetNotificationsForAccountResponse
     */
    public function describeBudgetNotificationsForAccount(DescribeBudgetNotificationsForAccountRequest $args)
    {
        $result = parent::describeBudgetNotificationsForAccount($args->toArray());
        return new DescribeBudgetNotificationsForAccountResponse($result->toArray());
    }
}
