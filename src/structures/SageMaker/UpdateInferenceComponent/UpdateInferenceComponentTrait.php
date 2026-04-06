<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponent;

trait UpdateInferenceComponentTrait
{
    /**
     * @param UpdateInferenceComponentRequest $args
     * @return UpdateInferenceComponentResponse
     */
    public function updateInferenceComponent(UpdateInferenceComponentRequest $args)
    {
        $result = parent::updateInferenceComponent($args->toArray());
        return new UpdateInferenceComponentResponse($result->toArray());
    }
}
