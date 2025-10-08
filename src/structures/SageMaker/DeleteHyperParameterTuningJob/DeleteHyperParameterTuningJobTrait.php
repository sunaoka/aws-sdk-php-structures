<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteHyperParameterTuningJob;

trait DeleteHyperParameterTuningJobTrait
{
    /**
     * @param DeleteHyperParameterTuningJobRequest $args
     * @return void
     */
    public function deleteHyperParameterTuningJob(DeleteHyperParameterTuningJobRequest $args)
    {
        parent::deleteHyperParameterTuningJob($args->toArray());
    }
}
