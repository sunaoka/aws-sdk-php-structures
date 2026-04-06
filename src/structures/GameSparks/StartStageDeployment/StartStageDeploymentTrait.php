<?php

namespace Sunaoka\Aws\Structures\GameSparks\StartStageDeployment;

trait StartStageDeploymentTrait
{
    /**
     * @param StartStageDeploymentRequest $args
     * @return StartStageDeploymentResponse
     */
    public function startStageDeployment(StartStageDeploymentRequest $args)
    {
        $result = parent::startStageDeployment($args->toArray());
        return new StartStageDeploymentResponse($result->toArray());
    }
}
