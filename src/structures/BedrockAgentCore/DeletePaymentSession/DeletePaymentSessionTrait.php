<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeletePaymentSession;

trait DeletePaymentSessionTrait
{
    /**
     * @param DeletePaymentSessionRequest $args
     * @return DeletePaymentSessionResponse
     */
    public function deletePaymentSession(DeletePaymentSessionRequest $args)
    {
        $result = parent::deletePaymentSession($args->toArray());
        return new DeletePaymentSessionResponse($result->toArray());
    }
}
