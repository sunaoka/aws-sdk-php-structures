<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentInstrument;

trait GetPaymentInstrumentTrait
{
    /**
     * @param GetPaymentInstrumentRequest $args
     * @return GetPaymentInstrumentResponse
     */
    public function getPaymentInstrument(GetPaymentInstrumentRequest $args)
    {
        $result = parent::getPaymentInstrument($args->toArray());
        return new GetPaymentInstrumentResponse($result->toArray());
    }
}
