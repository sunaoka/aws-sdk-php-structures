<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetwork;

trait GetServiceNetworkTrait
{
    /**
     * @param GetServiceNetworkRequest $args
     * @return GetServiceNetworkResponse
     */
    public function getServiceNetwork(GetServiceNetworkRequest $args)
    {
        $result = parent::getServiceNetwork($args->toArray());
        return new GetServiceNetworkResponse($result->toArray());
    }
}
