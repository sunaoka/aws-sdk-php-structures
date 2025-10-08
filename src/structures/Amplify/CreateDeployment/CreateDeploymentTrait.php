<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateDeployment;

trait CreateDeploymentTrait
{
    /**
     * @param CreateDeploymentRequest $args
     * @return CreateDeploymentResponse
     */
    public function createDeployment(CreateDeploymentRequest $args)
    {
        $result = parent::createDeployment($args->toArray());
        return new CreateDeploymentResponse($result->toArray());
    }
}
