<?php

namespace Sunaoka\Aws\Structures\Schemas\UpdateRegistry;

trait UpdateRegistryTrait
{
    /**
     * @param UpdateRegistryRequest $args
     * @return UpdateRegistryResponse
     */
    public function updateRegistry(UpdateRegistryRequest $args)
    {
        $result = parent::updateRegistry($args->toArray());
        return new UpdateRegistryResponse($result->toArray());
    }
}
