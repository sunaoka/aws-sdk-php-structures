<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\ListWebFunctionEndpoints;

trait ListWebFunctionEndpointsTrait
{
    /**
     * @param ListWebFunctionEndpointsRequest $args
     * @return ListWebFunctionEndpointsResponse
     */
    public function listWebFunctionEndpoints(ListWebFunctionEndpointsRequest $args)
    {
        $result = parent::listWebFunctionEndpoints($args->toArray());
        return new ListWebFunctionEndpointsResponse($result->toArray());
    }
}
