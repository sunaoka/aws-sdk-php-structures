<?php

namespace Sunaoka\Aws\Structures\SageMakerGatewayRuntime\InvokeGlobalInferenceGatewayWithResponseStream;

trait InvokeGlobalInferenceGatewayWithResponseStreamTrait
{
    /**
     * @param InvokeGlobalInferenceGatewayWithResponseStreamRequest $args
     * @return InvokeGlobalInferenceGatewayWithResponseStreamResponse
     */
    public function invokeGlobalInferenceGatewayWithResponseStream(InvokeGlobalInferenceGatewayWithResponseStreamRequest $args)
    {
        $result = parent::invokeGlobalInferenceGatewayWithResponseStream($args->toArray());
        return new InvokeGlobalInferenceGatewayWithResponseStreamResponse($result->toArray());
    }
}
