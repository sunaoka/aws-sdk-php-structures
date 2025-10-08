<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\UpdateAppInstanceUserEndpoint;

trait UpdateAppInstanceUserEndpointTrait
{
    /**
     * @param UpdateAppInstanceUserEndpointRequest $args
     * @return UpdateAppInstanceUserEndpointResponse
     */
    public function updateAppInstanceUserEndpoint(UpdateAppInstanceUserEndpointRequest $args)
    {
        $result = parent::updateAppInstanceUserEndpoint($args->toArray());
        return new UpdateAppInstanceUserEndpointResponse($result->toArray());
    }
}
