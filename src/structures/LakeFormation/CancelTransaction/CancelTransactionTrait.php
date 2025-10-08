<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CancelTransaction;

trait CancelTransactionTrait
{
    /**
     * @param CancelTransactionRequest $args
     * @return CancelTransactionResponse
     */
    public function cancelTransaction(CancelTransactionRequest $args)
    {
        $result = parent::cancelTransaction($args->toArray());
        return new CancelTransactionResponse($result->toArray());
    }
}
