<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobExecutionsForJob;

trait ListJobExecutionsForJobTrait
{
    /**
     * @param ListJobExecutionsForJobRequest $args
     * @return ListJobExecutionsForJobResponse
     */
    public function listJobExecutionsForJob(ListJobExecutionsForJobRequest $args)
    {
        $result = parent::listJobExecutionsForJob($args->toArray());
        return new ListJobExecutionsForJobResponse($result->toArray());
    }
}
