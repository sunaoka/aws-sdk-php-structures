<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelInvocationJob;

trait CreateModelInvocationJobTrait
{
    /**
     * @param CreateModelInvocationJobRequest $args
     * @return CreateModelInvocationJobResponse
     */
    public function createModelInvocationJob(CreateModelInvocationJobRequest $args)
    {
        $result = parent::createModelInvocationJob($args->toArray());
        return new CreateModelInvocationJobResponse($result->toArray());
    }
}
