<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateNetwork;

trait UpdateNetworkTrait
{
    /**
     * @param UpdateNetworkRequest $args
     * @return UpdateNetworkResponse
     */
    public function updateNetwork(UpdateNetworkRequest $args)
    {
        $result = parent::updateNetwork($args->toArray());
        return new UpdateNetworkResponse($result->toArray());
    }
}
