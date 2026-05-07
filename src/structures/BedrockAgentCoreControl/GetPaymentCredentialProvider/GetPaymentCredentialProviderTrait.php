<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPaymentCredentialProvider;

trait GetPaymentCredentialProviderTrait
{
    /**
     * @param GetPaymentCredentialProviderRequest $args
     * @return GetPaymentCredentialProviderResponse
     */
    public function getPaymentCredentialProvider(GetPaymentCredentialProviderRequest $args)
    {
        $result = parent::getPaymentCredentialProvider($args->toArray());
        return new GetPaymentCredentialProviderResponse($result->toArray());
    }
}
