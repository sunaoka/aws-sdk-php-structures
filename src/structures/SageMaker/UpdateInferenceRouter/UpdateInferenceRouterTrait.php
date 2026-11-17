<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceRouter;

trait UpdateInferenceRouterTrait
{
    /**
     * @param UpdateInferenceRouterRequest $args
     * @return UpdateInferenceRouterResponse
     */
    public function updateInferenceRouter(UpdateInferenceRouterRequest $args)
    {
        $result = parent::updateInferenceRouter($args->toArray());
        return new UpdateInferenceRouterResponse($result->toArray());
    }
}
