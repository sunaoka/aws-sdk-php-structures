<?php

namespace Sunaoka\Aws\Structures\Billing\SplitCredit;

trait SplitCreditTrait
{
    /**
     * @param SplitCreditRequest $args
     * @return SplitCreditResponse
     */
    public function splitCredit(SplitCreditRequest $args)
    {
        $result = parent::splitCredit($args->toArray());
        return new SplitCreditResponse($result->toArray());
    }
}
