<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateVpcEndpoint;

trait CreateVpcEndpointTrait
{
    /**
     * @param CreateVpcEndpointRequest $args
     * @return CreateVpcEndpointResponse
     */
    public function createVpcEndpoint(CreateVpcEndpointRequest $args)
    {
        $result = parent::createVpcEndpoint($args->toArray());
        return new CreateVpcEndpointResponse($result->toArray());
    }
}
