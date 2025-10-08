<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateExperiment;

trait CreateExperimentTrait
{
    /**
     * @param CreateExperimentRequest $args
     * @return CreateExperimentResponse
     */
    public function createExperiment(CreateExperimentRequest $args)
    {
        $result = parent::createExperiment($args->toArray());
        return new CreateExperimentResponse($result->toArray());
    }
}
