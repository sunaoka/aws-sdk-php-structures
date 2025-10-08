<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob;

trait CreateJobTrait
{
    /**
     * @param CreateJobRequest $args
     * @return CreateJobResponse
     */
    public function createJob(CreateJobRequest $args)
    {
        $result = parent::createJob($args->toArray());
        return new CreateJobResponse($result->toArray());
    }
}
