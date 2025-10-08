<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNetwork;

trait CreateNetworkTrait
{
    /**
     * @param CreateNetworkRequest $args
     * @return CreateNetworkResponse
     */
    public function createNetwork(CreateNetworkRequest $args)
    {
        $result = parent::createNetwork($args->toArray());
        return new CreateNetworkResponse($result->toArray());
    }
}
