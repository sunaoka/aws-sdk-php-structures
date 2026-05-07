<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentInstrumentBalance;

trait GetPaymentInstrumentBalanceTrait
{
    /**
     * @param GetPaymentInstrumentBalanceRequest $args
     * @return GetPaymentInstrumentBalanceResponse
     */
    public function getPaymentInstrumentBalance(GetPaymentInstrumentBalanceRequest $args)
    {
        $result = parent::getPaymentInstrumentBalance($args->toArray());
        return new GetPaymentInstrumentBalanceResponse($result->toArray());
    }
}
