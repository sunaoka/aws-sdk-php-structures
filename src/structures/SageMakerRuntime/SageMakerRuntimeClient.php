<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime;

class SageMakerRuntimeClient extends \Aws\SageMakerRuntime\SageMakerRuntimeClient
{
    use InvokeEndpoint\InvokeEndpointTrait;
    use InvokeEndpointAsync\InvokeEndpointAsyncTrait;
    use InvokeEndpointWithResponseStream\InvokeEndpointWithResponseStreamTrait;
}
