<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCapacityProvider;

trait GetCapacityProviderTrait
{
    /**
     * @param GetCapacityProviderRequest $args
     * @return GetCapacityProviderResponse
     */
    public function getCapacityProvider(GetCapacityProviderRequest $args)
    {
        $result = parent::getCapacityProvider($args->toArray());
        return new GetCapacityProviderResponse($result->toArray());
    }
}
