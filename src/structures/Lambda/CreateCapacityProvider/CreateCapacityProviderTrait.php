<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateCapacityProvider;

trait CreateCapacityProviderTrait
{
    /**
     * @param CreateCapacityProviderRequest $args
     * @return CreateCapacityProviderResponse
     */
    public function createCapacityProvider(CreateCapacityProviderRequest $args)
    {
        $result = parent::createCapacityProvider($args->toArray());
        return new CreateCapacityProviderResponse($result->toArray());
    }
}
