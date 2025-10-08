<?php

namespace Sunaoka\Aws\Structures\RDSDataService\RollbackTransaction;

trait RollbackTransactionTrait
{
    /**
     * @param RollbackTransactionRequest $args
     * @return RollbackTransactionResponse
     */
    public function rollbackTransaction(RollbackTransactionRequest $args)
    {
        $result = parent::rollbackTransaction($args->toArray());
        return new RollbackTransactionResponse($result->toArray());
    }
}
