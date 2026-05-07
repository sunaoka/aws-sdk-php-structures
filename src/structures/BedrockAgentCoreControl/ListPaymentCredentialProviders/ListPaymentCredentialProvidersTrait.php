<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPaymentCredentialProviders;

trait ListPaymentCredentialProvidersTrait
{
    /**
     * @param ListPaymentCredentialProvidersRequest $args
     * @return ListPaymentCredentialProvidersResponse
     */
    public function listPaymentCredentialProviders(ListPaymentCredentialProvidersRequest $args)
    {
        $result = parent::listPaymentCredentialProviders($args->toArray());
        return new ListPaymentCredentialProvidersResponse($result->toArray());
    }
}
