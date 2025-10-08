<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopInferenceExperiment;

trait StopInferenceExperimentTrait
{
    /**
     * @param StopInferenceExperimentRequest $args
     * @return StopInferenceExperimentResponse
     */
    public function stopInferenceExperiment(StopInferenceExperimentRequest $args)
    {
        $result = parent::stopInferenceExperiment($args->toArray());
        return new StopInferenceExperimentResponse($result->toArray());
    }
}
