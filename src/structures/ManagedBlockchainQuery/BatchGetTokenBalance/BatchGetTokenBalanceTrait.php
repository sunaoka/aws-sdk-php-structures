<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\BatchGetTokenBalance;

trait BatchGetTokenBalanceTrait
{
    /**
     * @param BatchGetTokenBalanceRequest $args
     * @return BatchGetTokenBalanceResponse
     */
    public function batchGetTokenBalance(BatchGetTokenBalanceRequest $args)
    {
        $result = parent::batchGetTokenBalance($args->toArray());
        return new BatchGetTokenBalanceResponse($result->toArray());
    }
}
