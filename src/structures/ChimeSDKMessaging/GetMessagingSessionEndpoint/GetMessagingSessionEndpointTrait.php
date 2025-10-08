<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetMessagingSessionEndpoint;

trait GetMessagingSessionEndpointTrait
{
    /**
     * @param GetMessagingSessionEndpointRequest $args
     * @return GetMessagingSessionEndpointResponse
     */
    public function getMessagingSessionEndpoint(GetMessagingSessionEndpointRequest $args)
    {
        $result = parent::getMessagingSessionEndpoint($args->toArray());
        return new GetMessagingSessionEndpointResponse($result->toArray());
    }
}
