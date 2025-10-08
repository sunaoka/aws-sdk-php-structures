<?php

namespace Sunaoka\Aws\Structures\MTurk\GetAccountBalance;

trait GetAccountBalanceTrait
{
    /**
     * @param GetAccountBalanceRequest $args
     * @return GetAccountBalanceResponse
     */
    public function getAccountBalance(GetAccountBalanceRequest $args)
    {
        $result = parent::getAccountBalance($args->toArray());
        return new GetAccountBalanceResponse($result->toArray());
    }
}
