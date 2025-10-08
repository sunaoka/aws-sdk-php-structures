<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTokenBalances;

trait ListTokenBalancesTrait
{
    /**
     * @param ListTokenBalancesRequest $args
     * @return ListTokenBalancesResponse
     */
    public function listTokenBalances(ListTokenBalancesRequest $args)
    {
        $result = parent::listTokenBalances($args->toArray());
        return new ListTokenBalancesResponse($result->toArray());
    }
}
