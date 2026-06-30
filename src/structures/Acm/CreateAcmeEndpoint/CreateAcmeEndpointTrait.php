<?php

namespace Sunaoka\Aws\Structures\Acm\CreateAcmeEndpoint;

trait CreateAcmeEndpointTrait
{
    /**
     * @param CreateAcmeEndpointRequest $args
     * @return CreateAcmeEndpointResponse
     */
    public function createAcmeEndpoint(CreateAcmeEndpointRequest $args)
    {
        $result = parent::createAcmeEndpoint($args->toArray());
        return new CreateAcmeEndpointResponse($result->toArray());
    }
}
