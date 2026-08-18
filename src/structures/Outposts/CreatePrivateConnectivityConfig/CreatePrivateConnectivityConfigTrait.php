<?php

namespace Sunaoka\Aws\Structures\Outposts\CreatePrivateConnectivityConfig;

trait CreatePrivateConnectivityConfigTrait
{
    /**
     * @param CreatePrivateConnectivityConfigRequest $args
     * @return CreatePrivateConnectivityConfigResponse
     */
    public function createPrivateConnectivityConfig(CreatePrivateConnectivityConfigRequest $args)
    {
        $result = parent::createPrivateConnectivityConfig($args->toArray());
        return new CreatePrivateConnectivityConfigResponse($result->toArray());
    }
}
