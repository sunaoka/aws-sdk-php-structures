<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\StartNetworkResourceUpdate;

trait StartNetworkResourceUpdateTrait
{
    /**
     * @param StartNetworkResourceUpdateRequest $args
     * @return StartNetworkResourceUpdateResponse
     */
    public function startNetworkResourceUpdate(StartNetworkResourceUpdateRequest $args)
    {
        $result = parent::startNetworkResourceUpdate($args->toArray());
        return new StartNetworkResourceUpdateResponse($result->toArray());
    }
}
