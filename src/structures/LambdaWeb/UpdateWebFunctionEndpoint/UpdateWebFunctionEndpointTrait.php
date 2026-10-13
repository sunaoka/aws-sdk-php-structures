<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\UpdateWebFunctionEndpoint;

trait UpdateWebFunctionEndpointTrait
{
    /**
     * @param UpdateWebFunctionEndpointRequest $args
     * @return UpdateWebFunctionEndpointResponse
     */
    public function updateWebFunctionEndpoint(UpdateWebFunctionEndpointRequest $args)
    {
        $result = parent::updateWebFunctionEndpoint($args->toArray());
        return new UpdateWebFunctionEndpointResponse($result->toArray());
    }
}
