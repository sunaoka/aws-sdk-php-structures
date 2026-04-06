<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetNetworkResource;

trait GetNetworkResourceTrait
{
    /**
     * @param GetNetworkResourceRequest $args
     * @return GetNetworkResourceResponse
     */
    public function getNetworkResource(GetNetworkResourceRequest $args)
    {
        $result = parent::getNetworkResource($args->toArray());
        return new GetNetworkResourceResponse($result->toArray());
    }
}
