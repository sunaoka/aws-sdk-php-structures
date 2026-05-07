<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreatePaymentInstrument;

trait CreatePaymentInstrumentTrait
{
    /**
     * @param CreatePaymentInstrumentRequest $args
     * @return CreatePaymentInstrumentResponse
     */
    public function createPaymentInstrument(CreatePaymentInstrumentRequest $args)
    {
        $result = parent::createPaymentInstrument($args->toArray());
        return new CreatePaymentInstrumentResponse($result->toArray());
    }
}
