<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetwork;

trait CreateServiceNetworkTrait
{
    /**
     * @param CreateServiceNetworkRequest $args
     * @return CreateServiceNetworkResponse
     */
    public function createServiceNetwork(CreateServiceNetworkRequest $args)
    {
        $result = parent::createServiceNetwork($args->toArray());
        return new CreateServiceNetworkResponse($result->toArray());
    }
}
