<?php

namespace Sunaoka\Aws\Structures\SageMakerGatewayRuntime;

class SageMakerGatewayRuntimeClient extends \Aws\SageMakerGatewayRuntime\SageMakerGatewayRuntimeClient
{
    use InvokeGlobalInferenceGateway\InvokeGlobalInferenceGatewayTrait;
    use InvokeGlobalInferenceGatewayWithResponseStream\InvokeGlobalInferenceGatewayWithResponseStreamTrait;
}
