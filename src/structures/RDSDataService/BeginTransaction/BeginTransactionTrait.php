<?php

namespace Sunaoka\Aws\Structures\RDSDataService\BeginTransaction;

trait BeginTransactionTrait
{
    /**
     * @param BeginTransactionRequest $args
     * @return BeginTransactionResponse
     */
    public function beginTransaction(BeginTransactionRequest $args)
    {
        $result = parent::beginTransaction($args->toArray());
        return new BeginTransactionResponse($result->toArray());
    }
}
