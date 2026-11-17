<?php

namespace Sunaoka\Aws\Structures\SageMakerInferenceRouterRuntime;

class SageMakerInferenceRouterRuntimeClient extends \Aws\SageMakerInferenceRouterRuntime\SageMakerInferenceRouterRuntimeClient
{
    use InvokeInferenceRouter\InvokeInferenceRouterTrait;
    use InvokeInferenceRouterAsync\InvokeInferenceRouterAsyncTrait;
}
