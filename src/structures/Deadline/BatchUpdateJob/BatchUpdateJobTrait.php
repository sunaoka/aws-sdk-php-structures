<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchUpdateJob;

trait BatchUpdateJobTrait
{
    /**
     * @param BatchUpdateJobRequest $args
     * @return BatchUpdateJobResponse
     */
    public function batchUpdateJob(BatchUpdateJobRequest $args)
    {
        $result = parent::batchUpdateJob($args->toArray());
        return new BatchUpdateJobResponse($result->toArray());
    }
}
