<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\GetWebFunctionEndpoint;

trait GetWebFunctionEndpointTrait
{
    /**
     * @param GetWebFunctionEndpointRequest $args
     * @return GetWebFunctionEndpointResponse
     */
    public function getWebFunctionEndpoint(GetWebFunctionEndpointRequest $args)
    {
        $result = parent::getWebFunctionEndpoint($args->toArray());
        return new GetWebFunctionEndpointResponse($result->toArray());
    }
}
