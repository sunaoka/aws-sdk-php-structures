<?php

namespace Sunaoka\Aws\Structures\Ecs\StopServiceDeployment;

trait StopServiceDeploymentTrait
{
    /**
     * @param StopServiceDeploymentRequest $args
     * @return StopServiceDeploymentResponse
     */
    public function stopServiceDeployment(StopServiceDeploymentRequest $args)
    {
        $result = parent::stopServiceDeployment($args->toArray());
        return new StopServiceDeploymentResponse($result->toArray());
    }
}
