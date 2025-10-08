<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartMonitorDeployment;

trait StartMonitorDeploymentTrait
{
    /**
     * @param StartMonitorDeploymentRequest $args
     * @return StartMonitorDeploymentResponse
     */
    public function startMonitorDeployment(StartMonitorDeploymentRequest $args)
    {
        $result = parent::startMonitorDeployment($args->toArray());
        return new StartMonitorDeploymentResponse($result->toArray());
    }
}
