<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetStageDeployment;

trait GetStageDeploymentTrait
{
    /**
     * @param GetStageDeploymentRequest $args
     * @return GetStageDeploymentResponse
     */
    public function getStageDeployment(GetStageDeploymentRequest $args)
    {
        $result = parent::getStageDeployment($args->toArray());
        return new GetStageDeploymentResponse($result->toArray());
    }
}
