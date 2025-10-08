<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingJobsForHyperParameterTuningJob;

trait ListTrainingJobsForHyperParameterTuningJobTrait
{
    /**
     * @param ListTrainingJobsForHyperParameterTuningJobRequest $args
     * @return ListTrainingJobsForHyperParameterTuningJobResponse
     */
    public function listTrainingJobsForHyperParameterTuningJob(
        ListTrainingJobsForHyperParameterTuningJobRequest $args,
    ) {
        $result = parent::listTrainingJobsForHyperParameterTuningJob($args->toArray());
        return new ListTrainingJobsForHyperParameterTuningJobResponse($result->toArray());
    }
}
