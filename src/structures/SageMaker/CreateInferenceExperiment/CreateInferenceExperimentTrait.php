<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceExperiment;

trait CreateInferenceExperimentTrait
{
    /**
     * @param CreateInferenceExperimentRequest $args
     * @return CreateInferenceExperimentResponse
     */
    public function createInferenceExperiment(CreateInferenceExperimentRequest $args)
    {
        $result = parent::createInferenceExperiment($args->toArray());
        return new CreateInferenceExperimentResponse($result->toArray());
    }
}
