<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\GetSignalingChannelEndpoint;

trait GetSignalingChannelEndpointTrait
{
    /**
     * @param GetSignalingChannelEndpointRequest $args
     * @return GetSignalingChannelEndpointResponse
     */
    public function getSignalingChannelEndpoint(GetSignalingChannelEndpointRequest $args)
    {
        $result = parent::getSignalingChannelEndpoint($args->toArray());
        return new GetSignalingChannelEndpointResponse($result->toArray());
    }
}
