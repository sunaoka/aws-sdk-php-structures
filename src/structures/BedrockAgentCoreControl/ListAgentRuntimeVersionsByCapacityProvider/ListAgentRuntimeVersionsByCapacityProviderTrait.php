<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListAgentRuntimeVersionsByCapacityProvider;

trait ListAgentRuntimeVersionsByCapacityProviderTrait
{
    /**
     * @param ListAgentRuntimeVersionsByCapacityProviderRequest $args
     * @return ListAgentRuntimeVersionsByCapacityProviderResponse
     */
    public function listAgentRuntimeVersionsByCapacityProvider(ListAgentRuntimeVersionsByCapacityProviderRequest $args)
    {
        $result = parent::listAgentRuntimeVersionsByCapacityProvider($args->toArray());
        return new ListAgentRuntimeVersionsByCapacityProviderResponse($result->toArray());
    }
}
