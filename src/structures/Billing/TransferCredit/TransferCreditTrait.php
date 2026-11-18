<?php

namespace Sunaoka\Aws\Structures\Billing\TransferCredit;

trait TransferCreditTrait
{
    /**
     * @param TransferCreditRequest $args
     * @return TransferCreditResponse
     */
    public function transferCredit(TransferCreditRequest $args)
    {
        $result = parent::transferCredit($args->toArray());
        return new TransferCreditResponse($result->toArray());
    }
}
