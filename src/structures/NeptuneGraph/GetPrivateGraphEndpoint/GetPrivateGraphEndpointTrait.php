<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetPrivateGraphEndpoint;

trait GetPrivateGraphEndpointTrait
{
    /**
     * @param GetPrivateGraphEndpointRequest $args
     * @return GetPrivateGraphEndpointResponse
     */
    public function getPrivateGraphEndpoint(GetPrivateGraphEndpointRequest $args)
    {
        $result = parent::getPrivateGraphEndpoint($args->toArray());
        return new GetPrivateGraphEndpointResponse($result->toArray());
    }
}
