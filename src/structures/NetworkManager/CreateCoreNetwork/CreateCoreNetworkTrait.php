<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateCoreNetwork;

trait CreateCoreNetworkTrait
{
    /**
     * @param CreateCoreNetworkRequest $args
     * @return CreateCoreNetworkResponse
     */
    public function createCoreNetwork(CreateCoreNetworkRequest $args)
    {
        $result = parent::createCoreNetwork($args->toArray());
        return new CreateCoreNetworkResponse($result->toArray());
    }
}
