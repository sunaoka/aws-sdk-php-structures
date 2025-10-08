<?php

namespace Sunaoka\Aws\Structures\Batch\DeleteComputeEnvironment;

trait DeleteComputeEnvironmentTrait
{
    /**
     * @param DeleteComputeEnvironmentRequest $args
     * @return DeleteComputeEnvironmentResponse
     */
    public function deleteComputeEnvironment(DeleteComputeEnvironmentRequest $args)
    {
        $result = parent::deleteComputeEnvironment($args->toArray());
        return new DeleteComputeEnvironmentResponse($result->toArray());
    }
}
