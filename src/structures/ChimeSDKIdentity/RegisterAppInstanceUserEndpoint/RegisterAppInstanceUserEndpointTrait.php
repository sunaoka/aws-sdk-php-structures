<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\RegisterAppInstanceUserEndpoint;

trait RegisterAppInstanceUserEndpointTrait
{
    /**
     * @param RegisterAppInstanceUserEndpointRequest $args
     * @return RegisterAppInstanceUserEndpointResponse
     */
    public function registerAppInstanceUserEndpoint(RegisterAppInstanceUserEndpointRequest $args)
    {
        $result = parent::registerAppInstanceUserEndpoint($args->toArray());
        return new RegisterAppInstanceUserEndpointResponse($result->toArray());
    }
}
