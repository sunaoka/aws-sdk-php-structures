<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExecuteTransaction;

trait ExecuteTransactionTrait
{
    /**
     * @param ExecuteTransactionRequest $args
     * @return ExecuteTransactionResponse
     */
    public function executeTransaction(ExecuteTransactionRequest $args)
    {
        $result = parent::executeTransaction($args->toArray());
        return new ExecuteTransactionResponse($result->toArray());
    }
}
