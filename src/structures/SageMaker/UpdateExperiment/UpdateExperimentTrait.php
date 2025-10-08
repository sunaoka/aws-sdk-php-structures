<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateExperiment;

trait UpdateExperimentTrait
{
    /**
     * @param UpdateExperimentRequest $args
     * @return UpdateExperimentResponse
     */
    public function updateExperiment(UpdateExperimentRequest $args)
    {
        $result = parent::updateExperiment($args->toArray());
        return new UpdateExperimentResponse($result->toArray());
    }
}
