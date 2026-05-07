<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentSession;

trait GetPaymentSessionTrait
{
    /**
     * @param GetPaymentSessionRequest $args
     * @return GetPaymentSessionResponse
     */
    public function getPaymentSession(GetPaymentSessionRequest $args)
    {
        $result = parent::getPaymentSession($args->toArray());
        return new GetPaymentSessionResponse($result->toArray());
    }
}
