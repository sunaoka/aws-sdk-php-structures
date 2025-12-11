<?php

namespace Sunaoka\Aws\Structures\Lambda\ListCapacityProviders;

trait ListCapacityProvidersTrait
{
    /**
     * @param ListCapacityProvidersRequest $args
     * @return ListCapacityProvidersResponse
     */
    public function listCapacityProviders(ListCapacityProvidersRequest $args)
    {
        $result = parent::listCapacityProviders($args->toArray());
        return new ListCapacityProvidersResponse($result->toArray());
    }
}
