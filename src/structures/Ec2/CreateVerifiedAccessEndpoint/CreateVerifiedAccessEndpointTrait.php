<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint;

trait CreateVerifiedAccessEndpointTrait
{
    /**
     * @param CreateVerifiedAccessEndpointRequest $args
     * @return CreateVerifiedAccessEndpointResponse
     */
    public function createVerifiedAccessEndpoint(CreateVerifiedAccessEndpointRequest $args)
    {
        $result = parent::createVerifiedAccessEndpoint($args->toArray());
        return new CreateVerifiedAccessEndpointResponse($result->toArray());
    }
}
