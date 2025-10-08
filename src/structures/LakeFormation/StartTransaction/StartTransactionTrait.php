<?php

namespace Sunaoka\Aws\Structures\LakeFormation\StartTransaction;

trait StartTransactionTrait
{
    /**
     * @param StartTransactionRequest $args
     * @return StartTransactionResponse
     */
    public function startTransaction(StartTransactionRequest $args)
    {
        $result = parent::startTransaction($args->toArray());
        return new StartTransactionResponse($result->toArray());
    }
}
