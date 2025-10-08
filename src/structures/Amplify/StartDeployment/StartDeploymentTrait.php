<?php

namespace Sunaoka\Aws\Structures\Amplify\StartDeployment;

trait StartDeploymentTrait
{
    /**
     * @param StartDeploymentRequest $args
     * @return StartDeploymentResponse
     */
    public function startDeployment(StartDeploymentRequest $args)
    {
        $result = parent::startDeployment($args->toArray());
        return new StartDeploymentResponse($result->toArray());
    }
}
