<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionVersionsByCapacityProvider;

trait ListFunctionVersionsByCapacityProviderTrait
{
    /**
     * @param ListFunctionVersionsByCapacityProviderRequest $args
     * @return ListFunctionVersionsByCapacityProviderResponse
     */
    public function listFunctionVersionsByCapacityProvider(ListFunctionVersionsByCapacityProviderRequest $args)
    {
        $result = parent::listFunctionVersionsByCapacityProvider($args->toArray());
        return new ListFunctionVersionsByCapacityProviderResponse($result->toArray());
    }
}
