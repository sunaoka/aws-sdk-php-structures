<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateCoreNetwork;

trait UpdateCoreNetworkTrait
{
    /**
     * @param UpdateCoreNetworkRequest $args
     * @return UpdateCoreNetworkResponse
     */
    public function updateCoreNetwork(UpdateCoreNetworkRequest $args)
    {
        $result = parent::updateCoreNetwork($args->toArray());
        return new UpdateCoreNetworkResponse($result->toArray());
    }
}
