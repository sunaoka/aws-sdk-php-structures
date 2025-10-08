<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpoint;

trait InvokeEndpointTrait
{
    /**
     * @param InvokeEndpointRequest $args
     * @return InvokeEndpointResponse
     */
    public function invokeEndpoint(InvokeEndpointRequest $args)
    {
        $result = parent::invokeEndpoint($args->toArray());
        return new InvokeEndpointResponse($result->toArray());
    }
}
