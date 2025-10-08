<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteServiceNetwork;

trait DeleteServiceNetworkTrait
{
    /**
     * @param DeleteServiceNetworkRequest $args
     * @return DeleteServiceNetworkResponse
     */
    public function deleteServiceNetwork(DeleteServiceNetworkRequest $args)
    {
        $result = parent::deleteServiceNetwork($args->toArray());
        return new DeleteServiceNetworkResponse($result->toArray());
    }
}
