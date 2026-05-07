<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePaymentCredentialProvider;

trait DeletePaymentCredentialProviderTrait
{
    /**
     * @param DeletePaymentCredentialProviderRequest $args
     * @return DeletePaymentCredentialProviderResponse
     */
    public function deletePaymentCredentialProvider(DeletePaymentCredentialProviderRequest $args)
    {
        $result = parent::deletePaymentCredentialProvider($args->toArray());
        return new DeletePaymentCredentialProviderResponse($result->toArray());
    }
}
