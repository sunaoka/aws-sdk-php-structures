<?php

namespace Sunaoka\Aws\Structures\SageMakerInferenceRouterRuntime\InvokeInferenceRouterAsync;

trait InvokeInferenceRouterAsyncTrait
{
    /**
     * @param InvokeInferenceRouterAsyncRequest $args
     * @return InvokeInferenceRouterAsyncResponse
     */
    public function invokeInferenceRouterAsync(InvokeInferenceRouterAsyncRequest $args)
    {
        $result = parent::invokeInferenceRouterAsync($args->toArray());
        return new InvokeInferenceRouterAsyncResponse($result->toArray());
    }
}
