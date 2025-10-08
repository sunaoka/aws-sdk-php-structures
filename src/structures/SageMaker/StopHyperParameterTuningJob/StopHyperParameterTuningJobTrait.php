<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopHyperParameterTuningJob;

trait StopHyperParameterTuningJobTrait
{
    /**
     * @param StopHyperParameterTuningJobRequest $args
     * @return void
     */
    public function stopHyperParameterTuningJob(StopHyperParameterTuningJobRequest $args)
    {
        parent::stopHyperParameterTuningJob($args->toArray());
    }
}
