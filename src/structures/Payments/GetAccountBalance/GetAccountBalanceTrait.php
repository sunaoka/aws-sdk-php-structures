<?php

namespace Sunaoka\Aws\Structures\Payments\GetAccountBalance;

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
