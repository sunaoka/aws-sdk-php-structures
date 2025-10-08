<?php

namespace Sunaoka\Aws\Structures\Bedrock\StopModelInvocationJob;

trait StopModelInvocationJobTrait
{
    /**
     * @param StopModelInvocationJobRequest $args
     * @return StopModelInvocationJobResponse
     */
    public function stopModelInvocationJob(StopModelInvocationJobRequest $args)
    {
        $result = parent::stopModelInvocationJob($args->toArray());
        return new StopModelInvocationJobResponse($result->toArray());
    }
}
