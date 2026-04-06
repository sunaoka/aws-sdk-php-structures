<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreatePrivateGraphEndpoint;

trait CreatePrivateGraphEndpointTrait
{
    /**
     * @param CreatePrivateGraphEndpointRequest $args
     * @return CreatePrivateGraphEndpointResponse
     */
    public function createPrivateGraphEndpoint(CreatePrivateGraphEndpointRequest $args)
    {
        $result = parent::createPrivateGraphEndpoint($args->toArray());
        return new CreatePrivateGraphEndpointResponse($result->toArray());
    }
}
