<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactions;

trait ListTransactionsTrait
{
    /**
     * @param ListTransactionsRequest $args
     * @return ListTransactionsResponse
     */
    public function listTransactions(ListTransactionsRequest $args)
    {
        $result = parent::listTransactions($args->toArray());
        return new ListTransactionsResponse($result->toArray());
    }
}
