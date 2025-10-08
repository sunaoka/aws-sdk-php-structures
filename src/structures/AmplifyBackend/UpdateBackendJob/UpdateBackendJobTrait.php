<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendJob;

trait UpdateBackendJobTrait
{
    /**
     * @param UpdateBackendJobRequest $args
     * @return UpdateBackendJobResponse
     */
    public function updateBackendJob(UpdateBackendJobRequest $args)
    {
        $result = parent::updateBackendJob($args->toArray());
        return new UpdateBackendJobResponse($result->toArray());
    }
}
