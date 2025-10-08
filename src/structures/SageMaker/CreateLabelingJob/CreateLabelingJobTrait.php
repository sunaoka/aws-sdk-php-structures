<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateLabelingJob;

trait CreateLabelingJobTrait
{
    /**
     * @param CreateLabelingJobRequest $args
     * @return CreateLabelingJobResponse
     */
    public function createLabelingJob(CreateLabelingJobRequest $args)
    {
        $result = parent::createLabelingJob($args->toArray());
        return new CreateLabelingJobResponse($result->toArray());
    }
}
