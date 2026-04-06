<?php

namespace Sunaoka\Aws\Structures\Wickr\GetNetwork;

trait GetNetworkTrait
{
    /**
     * @param GetNetworkRequest $args
     * @return GetNetworkResponse
     */
    public function getNetwork(GetNetworkRequest $args)
    {
        $result = parent::getNetwork($args->toArray());
        return new GetNetworkResponse($result->toArray());
    }
}
