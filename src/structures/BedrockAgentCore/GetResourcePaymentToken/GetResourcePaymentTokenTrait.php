<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourcePaymentToken;

trait GetResourcePaymentTokenTrait
{
    /**
     * @param GetResourcePaymentTokenRequest $args
     * @return GetResourcePaymentTokenResponse
     */
    public function getResourcePaymentToken(GetResourcePaymentTokenRequest $args)
    {
        $result = parent::getResourcePaymentToken($args->toArray());
        return new GetResourcePaymentTokenResponse($result->toArray());
    }
}
