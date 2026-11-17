<?php

namespace Sunaoka\Aws\Structures\SageMakerInferenceRouterRuntime\InvokeInferenceRouter;

trait InvokeInferenceRouterTrait
{
    /**
     * @param InvokeInferenceRouterRequest $args
     * @return InvokeInferenceRouterResponse
     */
    public function invokeInferenceRouter(InvokeInferenceRouterRequest $args)
    {
        $result = parent::invokeInferenceRouter($args->toArray());
        return new InvokeInferenceRouterResponse($result->toArray());
    }
}
