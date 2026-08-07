<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreateRegistry;

trait CreateRegistryTrait
{
    /**
     * @param CreateRegistryRequest $args
     * @return CreateRegistryResponse
     */
    public function createRegistry(CreateRegistryRequest $args)
    {
        $result = parent::createRegistry($args->toArray());
        return new CreateRegistryResponse($result->toArray());
    }
}
