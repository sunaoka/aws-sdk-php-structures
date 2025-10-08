<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartDeleteMonitorDeployment;

trait StartDeleteMonitorDeploymentTrait
{
    /**
     * @param StartDeleteMonitorDeploymentRequest $args
     * @return StartDeleteMonitorDeploymentResponse
     */
    public function startDeleteMonitorDeployment(StartDeleteMonitorDeploymentRequest $args)
    {
        $result = parent::startDeleteMonitorDeployment($args->toArray());
        return new StartDeleteMonitorDeploymentResponse($result->toArray());
    }
}
