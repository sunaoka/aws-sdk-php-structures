<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpointWithResponseStream;

trait InvokeEndpointWithResponseStreamTrait
{
    /**
     * @param InvokeEndpointWithResponseStreamRequest $args
     * @return InvokeEndpointWithResponseStreamResponse
     */
    public function invokeEndpointWithResponseStream(InvokeEndpointWithResponseStreamRequest $args)
    {
        $result = parent::invokeEndpointWithResponseStream($args->toArray());
        return new InvokeEndpointWithResponseStreamResponse($result->toArray());
    }
}
