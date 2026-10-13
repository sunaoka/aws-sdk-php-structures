<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunctionEndpoint;

trait CreateWebFunctionEndpointTrait
{
    /**
     * @param CreateWebFunctionEndpointRequest $args
     * @return CreateWebFunctionEndpointResponse
     */
    public function createWebFunctionEndpoint(CreateWebFunctionEndpointRequest $args)
    {
        $result = parent::createWebFunctionEndpoint($args->toArray());
        return new CreateWebFunctionEndpointResponse($result->toArray());
    }
}
