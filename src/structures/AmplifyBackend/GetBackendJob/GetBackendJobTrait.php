<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendJob;

trait GetBackendJobTrait
{
    /**
     * @param GetBackendJobRequest $args
     * @return GetBackendJobResponse
     */
    public function getBackendJob(GetBackendJobRequest $args)
    {
        $result = parent::getBackendJob($args->toArray());
        return new GetBackendJobResponse($result->toArray());
    }
}
