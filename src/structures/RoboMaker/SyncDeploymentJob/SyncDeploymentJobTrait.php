<?php

namespace Sunaoka\Aws\Structures\RoboMaker\SyncDeploymentJob;

trait SyncDeploymentJobTrait
{
    /**
     * @param SyncDeploymentJobRequest $args
     * @return SyncDeploymentJobResponse
     */
    public function syncDeploymentJob(SyncDeploymentJobRequest $args)
    {
        $result = parent::syncDeploymentJob($args->toArray());
        return new SyncDeploymentJobResponse($result->toArray());
    }
}
