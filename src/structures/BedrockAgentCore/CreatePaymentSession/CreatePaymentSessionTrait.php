<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreatePaymentSession;

trait CreatePaymentSessionTrait
{
    /**
     * @param CreatePaymentSessionRequest $args
     * @return CreatePaymentSessionResponse
     */
    public function createPaymentSession(CreatePaymentSessionRequest $args)
    {
        $result = parent::createPaymentSession($args->toArray());
        return new CreatePaymentSessionResponse($result->toArray());
    }
}
