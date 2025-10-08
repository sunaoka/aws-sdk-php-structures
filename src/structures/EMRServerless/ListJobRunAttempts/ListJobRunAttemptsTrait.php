<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListJobRunAttempts;

trait ListJobRunAttemptsTrait
{
    /**
     * @param ListJobRunAttemptsRequest $args
     * @return ListJobRunAttemptsResponse
     */
    public function listJobRunAttempts(ListJobRunAttemptsRequest $args)
    {
        $result = parent::listJobRunAttempts($args->toArray());
        return new ListJobRunAttemptsResponse($result->toArray());
    }
}
