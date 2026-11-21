<?php

namespace Sunaoka\Aws\Structures\SageMakerGatewayRuntime\InvokeGlobalInferenceGateway;

trait InvokeGlobalInferenceGatewayTrait
{
    /**
     * @param InvokeGlobalInferenceGatewayRequest $args
     * @return InvokeGlobalInferenceGatewayResponse
     */
    public function invokeGlobalInferenceGateway(InvokeGlobalInferenceGatewayRequest $args)
    {
        $result = parent::invokeGlobalInferenceGateway($args->toArray());
        return new InvokeGlobalInferenceGatewayResponse($result->toArray());
    }
}
