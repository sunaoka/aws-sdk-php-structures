<?php

namespace Sunaoka\Aws\Structures\Ecs\ContinueServiceDeployment;

trait ContinueServiceDeploymentTrait
{
    /**
     * @param ContinueServiceDeploymentRequest $args
     * @return ContinueServiceDeploymentResponse
     */
    public function continueServiceDeployment(ContinueServiceDeploymentRequest $args)
    {
        $result = parent::continueServiceDeployment($args->toArray());
        return new ContinueServiceDeploymentResponse($result->toArray());
    }
}
