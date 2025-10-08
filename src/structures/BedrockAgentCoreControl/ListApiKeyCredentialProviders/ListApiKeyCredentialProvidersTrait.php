<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListApiKeyCredentialProviders;

trait ListApiKeyCredentialProvidersTrait
{
    /**
     * @param ListApiKeyCredentialProvidersRequest $args
     * @return ListApiKeyCredentialProvidersResponse
     */
    public function listApiKeyCredentialProviders(ListApiKeyCredentialProvidersRequest $args)
    {
        $result = parent::listApiKeyCredentialProviders($args->toArray());
        return new ListApiKeyCredentialProvidersResponse($result->toArray());
    }
}
