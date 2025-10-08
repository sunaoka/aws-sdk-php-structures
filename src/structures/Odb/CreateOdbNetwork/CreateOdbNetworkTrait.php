<?php

namespace Sunaoka\Aws\Structures\Odb\CreateOdbNetwork;

trait CreateOdbNetworkTrait
{
    /**
     * @param CreateOdbNetworkRequest $args
     * @return CreateOdbNetworkResponse
     */
    public function createOdbNetwork(CreateOdbNetworkRequest $args)
    {
        $result = parent::createOdbNetwork($args->toArray());
        return new CreateOdbNetworkResponse($result->toArray());
    }
}
