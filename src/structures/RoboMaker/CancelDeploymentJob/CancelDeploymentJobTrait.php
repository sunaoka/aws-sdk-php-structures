<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CancelDeploymentJob;

trait CancelDeploymentJobTrait
{
    /**
     * @param CancelDeploymentJobRequest $args
     * @return CancelDeploymentJobResponse
     */
    public function cancelDeploymentJob(CancelDeploymentJobRequest $args)
    {
        $result = parent::cancelDeploymentJob($args->toArray());
        return new CancelDeploymentJobResponse($result->toArray());
    }
}
