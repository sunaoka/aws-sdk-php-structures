<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DeregisterAppInstanceUserEndpoint;

trait DeregisterAppInstanceUserEndpointTrait
{
    /**
     * @param DeregisterAppInstanceUserEndpointRequest $args
     * @return void
     */
    public function deregisterAppInstanceUserEndpoint(DeregisterAppInstanceUserEndpointRequest $args)
    {
        parent::deregisterAppInstanceUserEndpoint($args->toArray());
    }
}
