<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetTransaction;

trait GetTransactionTrait
{
    /**
     * @param GetTransactionRequest $args
     * @return GetTransactionResponse
     */
    public function getTransaction(GetTransactionRequest $args)
    {
        $result = parent::getTransaction($args->toArray());
        return new GetTransactionResponse($result->toArray());
    }
}
