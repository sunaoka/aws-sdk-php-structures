<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ExtendTransaction;

trait ExtendTransactionTrait
{
    /**
     * @param ExtendTransactionRequest $args
     * @return ExtendTransactionResponse
     */
    public function extendTransaction(ExtendTransactionRequest $args)
    {
        $result = parent::extendTransaction($args->toArray());
        return new ExtendTransactionResponse($result->toArray());
    }
}
