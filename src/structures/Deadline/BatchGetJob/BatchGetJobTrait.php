<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJob;

trait BatchGetJobTrait
{
    /**
     * @param BatchGetJobRequest $args
     * @return BatchGetJobResponse
     */
    public function batchGetJob(BatchGetJobRequest $args)
    {
        $result = parent::batchGetJob($args->toArray());
        return new BatchGetJobResponse($result->toArray());
    }
}
