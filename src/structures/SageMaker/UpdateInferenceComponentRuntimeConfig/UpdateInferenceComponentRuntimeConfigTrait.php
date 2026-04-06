<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponentRuntimeConfig;

trait UpdateInferenceComponentRuntimeConfigTrait
{
    /**
     * @param UpdateInferenceComponentRuntimeConfigRequest $args
     * @return UpdateInferenceComponentRuntimeConfigResponse
     */
    public function updateInferenceComponentRuntimeConfig(UpdateInferenceComponentRuntimeConfigRequest $args)
    {
        $result = parent::updateInferenceComponentRuntimeConfig($args->toArray());
        return new UpdateInferenceComponentRuntimeConfigResponse($result->toArray());
    }
}
