<?php

namespace Sunaoka\Aws\Structures\Ecs\PutClusterCapacityProviders;

trait PutClusterCapacityProvidersTrait
{
    /**
     * @param PutClusterCapacityProvidersRequest $args
     * @return PutClusterCapacityProvidersResponse
     */
    public function putClusterCapacityProviders(PutClusterCapacityProvidersRequest $args)
    {
        $result = parent::putClusterCapacityProviders($args->toArray());
        return new PutClusterCapacityProvidersResponse($result->toArray());
    }
}
