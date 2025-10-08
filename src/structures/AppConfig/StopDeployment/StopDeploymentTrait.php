<?php

namespace Sunaoka\Aws\Structures\AppConfig\StopDeployment;

trait StopDeploymentTrait
{
    /**
     * @param StopDeploymentRequest $args
     * @return StopDeploymentResponse
     */
    public function stopDeployment(StopDeploymentRequest $args)
    {
        $result = parent::stopDeployment($args->toArray());
        return new StopDeploymentResponse($result->toArray());
    }
}
