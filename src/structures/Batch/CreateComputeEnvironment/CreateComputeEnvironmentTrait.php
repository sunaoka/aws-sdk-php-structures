<?php

namespace Sunaoka\Aws\Structures\Batch\CreateComputeEnvironment;

trait CreateComputeEnvironmentTrait
{
    /**
     * @param CreateComputeEnvironmentRequest $args
     * @return CreateComputeEnvironmentResponse
     */
    public function createComputeEnvironment(CreateComputeEnvironmentRequest $args)
    {
        $result = parent::createComputeEnvironment($args->toArray());
        return new CreateComputeEnvironmentResponse($result->toArray());
    }
}
