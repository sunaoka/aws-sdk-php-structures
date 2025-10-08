<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpointAsync;

trait InvokeEndpointAsyncTrait
{
    /**
     * @param InvokeEndpointAsyncRequest $args
     * @return InvokeEndpointAsyncResponse
     */
    public function invokeEndpointAsync(InvokeEndpointAsyncRequest $args)
    {
        $result = parent::invokeEndpointAsync($args->toArray());
        return new InvokeEndpointAsyncResponse($result->toArray());
    }
}
