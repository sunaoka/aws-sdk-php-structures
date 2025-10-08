<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateGlobalNetwork;

trait UpdateGlobalNetworkTrait
{
    /**
     * @param UpdateGlobalNetworkRequest $args
     * @return UpdateGlobalNetworkResponse
     */
    public function updateGlobalNetwork(UpdateGlobalNetworkRequest $args)
    {
        $result = parent::updateGlobalNetwork($args->toArray());
        return new UpdateGlobalNetworkResponse($result->toArray());
    }
}
