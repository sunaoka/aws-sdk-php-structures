<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelInvocationJob;

trait GetModelInvocationJobTrait
{
    /**
     * @param GetModelInvocationJobRequest $args
     * @return GetModelInvocationJobResponse
     */
    public function getModelInvocationJob(GetModelInvocationJobRequest $args)
    {
        $result = parent::getModelInvocationJob($args->toArray());
        return new GetModelInvocationJobResponse($result->toArray());
    }
}
