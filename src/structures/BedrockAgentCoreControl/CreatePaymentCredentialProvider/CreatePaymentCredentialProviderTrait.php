<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePaymentCredentialProvider;

trait CreatePaymentCredentialProviderTrait
{
    /**
     * @param CreatePaymentCredentialProviderRequest $args
     * @return CreatePaymentCredentialProviderResponse
     */
    public function createPaymentCredentialProvider(CreatePaymentCredentialProviderRequest $args)
    {
        $result = parent::createPaymentCredentialProvider($args->toArray());
        return new CreatePaymentCredentialProviderResponse($result->toArray());
    }
}
