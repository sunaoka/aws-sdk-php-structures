<?php

namespace Sunaoka\Aws\Structures\Outposts\GetPrivateConnectivityConfig;

trait GetPrivateConnectivityConfigTrait
{
    /**
     * @param GetPrivateConnectivityConfigRequest $args
     * @return GetPrivateConnectivityConfigResponse
     */
    public function getPrivateConnectivityConfig(GetPrivateConnectivityConfigRequest $args)
    {
        $result = parent::getPrivateConnectivityConfig($args->toArray());
        return new GetPrivateConnectivityConfigResponse($result->toArray());
    }
}
