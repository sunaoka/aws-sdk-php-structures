<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetTokenBalance;

trait GetTokenBalanceTrait
{
    /**
     * @param GetTokenBalanceRequest $args
     * @return GetTokenBalanceResponse
     */
    public function getTokenBalance(GetTokenBalanceRequest $args)
    {
        $result = parent::getTokenBalance($args->toArray());
        return new GetTokenBalanceResponse($result->toArray());
    }
}
