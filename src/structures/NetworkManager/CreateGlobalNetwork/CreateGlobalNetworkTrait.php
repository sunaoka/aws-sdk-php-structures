<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateGlobalNetwork;

trait CreateGlobalNetworkTrait
{
    /**
     * @param CreateGlobalNetworkRequest $args
     * @return CreateGlobalNetworkResponse
     */
    public function createGlobalNetwork(CreateGlobalNetworkRequest $args)
    {
        $result = parent::createGlobalNetwork($args->toArray());
        return new CreateGlobalNetworkResponse($result->toArray());
    }
}
