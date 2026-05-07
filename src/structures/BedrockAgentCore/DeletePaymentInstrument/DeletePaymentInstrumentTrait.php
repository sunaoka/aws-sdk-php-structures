<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeletePaymentInstrument;

trait DeletePaymentInstrumentTrait
{
    /**
     * @param DeletePaymentInstrumentRequest $args
     * @return DeletePaymentInstrumentResponse
     */
    public function deletePaymentInstrument(DeletePaymentInstrumentRequest $args)
    {
        $result = parent::deletePaymentInstrument($args->toArray());
        return new DeletePaymentInstrumentResponse($result->toArray());
    }
}
