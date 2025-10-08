<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartInferenceExperiment;

trait StartInferenceExperimentTrait
{
    /**
     * @param StartInferenceExperimentRequest $args
     * @return StartInferenceExperimentResponse
     */
    public function startInferenceExperiment(StartInferenceExperimentRequest $args)
    {
        $result = parent::startInferenceExperiment($args->toArray());
        return new StartInferenceExperimentResponse($result->toArray());
    }
}
