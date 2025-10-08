<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteInferenceExperiment;

trait DeleteInferenceExperimentTrait
{
    /**
     * @param DeleteInferenceExperimentRequest $args
     * @return DeleteInferenceExperimentResponse
     */
    public function deleteInferenceExperiment(DeleteInferenceExperimentRequest $args)
    {
        $result = parent::deleteInferenceExperiment($args->toArray());
        return new DeleteInferenceExperimentResponse($result->toArray());
    }
}
