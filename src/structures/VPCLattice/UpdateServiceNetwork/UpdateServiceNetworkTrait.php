<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateServiceNetwork;

trait UpdateServiceNetworkTrait
{
    /**
     * @param UpdateServiceNetworkRequest $args
     * @return UpdateServiceNetworkResponse
     */
    public function updateServiceNetwork(UpdateServiceNetworkRequest $args)
    {
        $result = parent::updateServiceNetwork($args->toArray());
        return new UpdateServiceNetworkResponse($result->toArray());
    }
}
