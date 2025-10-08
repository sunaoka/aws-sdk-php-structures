<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCapacityProvider;

trait UpdateCapacityProviderTrait
{
    /**
     * @param UpdateCapacityProviderRequest $args
     * @return UpdateCapacityProviderResponse
     */
    public function updateCapacityProvider(UpdateCapacityProviderRequest $args)
    {
        $result = parent::updateCapacityProvider($args->toArray());
        return new UpdateCapacityProviderResponse($result->toArray());
    }
}
