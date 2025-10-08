<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment;

trait UpdateComputeEnvironmentTrait
{
    /**
     * @param UpdateComputeEnvironmentRequest $args
     * @return UpdateComputeEnvironmentResponse
     */
    public function updateComputeEnvironment(UpdateComputeEnvironmentRequest $args)
    {
        $result = parent::updateComputeEnvironment($args->toArray());
        return new UpdateComputeEnvironmentResponse($result->toArray());
    }
}
