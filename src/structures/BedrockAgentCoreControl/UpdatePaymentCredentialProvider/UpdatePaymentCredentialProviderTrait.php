<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentCredentialProvider;

trait UpdatePaymentCredentialProviderTrait
{
    /**
     * @param UpdatePaymentCredentialProviderRequest $args
     * @return UpdatePaymentCredentialProviderResponse
     */
    public function updatePaymentCredentialProvider(UpdatePaymentCredentialProviderRequest $args)
    {
        $result = parent::updatePaymentCredentialProvider($args->toArray());
        return new UpdatePaymentCredentialProviderResponse($result->toArray());
    }
}
