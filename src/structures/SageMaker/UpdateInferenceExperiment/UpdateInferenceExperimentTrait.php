<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceExperiment;

trait UpdateInferenceExperimentTrait
{
    /**
     * @param UpdateInferenceExperimentRequest $args
     * @return UpdateInferenceExperimentResponse
     */
    public function updateInferenceExperiment(UpdateInferenceExperimentRequest $args)
    {
        $result = parent::updateInferenceExperiment($args->toArray());
        return new UpdateInferenceExperimentResponse($result->toArray());
    }
}
