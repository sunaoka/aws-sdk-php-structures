<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteCapacityProvider;

trait DeleteCapacityProviderTrait
{
    /**
     * @param DeleteCapacityProviderRequest $args
     * @return DeleteCapacityProviderResponse
     */
    public function deleteCapacityProvider(DeleteCapacityProviderRequest $args)
    {
        $result = parent::deleteCapacityProvider($args->toArray());
        return new DeleteCapacityProviderResponse($result->toArray());
    }
}
