<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteGlobalNetwork;

trait DeleteGlobalNetworkTrait
{
    /**
     * @param DeleteGlobalNetworkRequest $args
     * @return DeleteGlobalNetworkResponse
     */
    public function deleteGlobalNetwork(DeleteGlobalNetworkRequest $args)
    {
        $result = parent::deleteGlobalNetwork($args->toArray());
        return new DeleteGlobalNetworkResponse($result->toArray());
    }
}
