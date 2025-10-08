<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateDeploymentJob;

trait CreateDeploymentJobTrait
{
    /**
     * @param CreateDeploymentJobRequest $args
     * @return CreateDeploymentJobResponse
     */
    public function createDeploymentJob(CreateDeploymentJobRequest $args)
    {
        $result = parent::createDeploymentJob($args->toArray());
        return new CreateDeploymentJobResponse($result->toArray());
    }
}
