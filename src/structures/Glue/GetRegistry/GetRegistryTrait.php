<?php

namespace Sunaoka\Aws\Structures\Glue\GetRegistry;

trait GetRegistryTrait
{
    /**
     * @param GetRegistryRequest $args
     * @return GetRegistryResponse
     */
    public function getRegistry(GetRegistryRequest $args)
    {
        $result = parent::getRegistry($args->toArray());
        return new GetRegistryResponse($result->toArray());
    }
}
