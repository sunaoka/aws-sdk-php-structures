<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRouter;

trait CreateInferenceRouterTrait
{
    /**
     * @param CreateInferenceRouterRequest $args
     * @return CreateInferenceRouterResponse
     */
    public function createInferenceRouter(CreateInferenceRouterRequest $args)
    {
        $result = parent::createInferenceRouter($args->toArray());
        return new CreateInferenceRouterResponse($result->toArray());
    }
}
