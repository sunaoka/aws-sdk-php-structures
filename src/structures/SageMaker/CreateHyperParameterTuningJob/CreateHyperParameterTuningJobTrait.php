<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob;

trait CreateHyperParameterTuningJobTrait
{
    /**
     * @param CreateHyperParameterTuningJobRequest $args
     * @return CreateHyperParameterTuningJobResponse
     */
    public function createHyperParameterTuningJob(CreateHyperParameterTuningJobRequest $args)
    {
        $result = parent::createHyperParameterTuningJob($args->toArray());
        return new CreateHyperParameterTuningJobResponse($result->toArray());
    }
}
