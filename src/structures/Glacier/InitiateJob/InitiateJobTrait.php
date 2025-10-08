<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateJob;

trait InitiateJobTrait
{
    /**
     * @param InitiateJobRequest $args
     * @return InitiateJobResponse
     */
    public function initiateJob(InitiateJobRequest $args)
    {
        $result = parent::initiateJob($args->toArray());
        return new InitiateJobResponse($result->toArray());
    }
}
