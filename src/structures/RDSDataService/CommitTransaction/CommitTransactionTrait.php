<?php

namespace Sunaoka\Aws\Structures\RDSDataService\CommitTransaction;

trait CommitTransactionTrait
{
    /**
     * @param CommitTransactionRequest $args
     * @return CommitTransactionResponse
     */
    public function commitTransaction(CommitTransactionRequest $args)
    {
        $result = parent::commitTransaction($args->toArray());
        return new CommitTransactionResponse($result->toArray());
    }
}
