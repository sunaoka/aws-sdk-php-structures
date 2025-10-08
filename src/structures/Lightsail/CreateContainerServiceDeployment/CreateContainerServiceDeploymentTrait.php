<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerServiceDeployment;

trait CreateContainerServiceDeploymentTrait
{
    /**
     * @param CreateContainerServiceDeploymentRequest $args
     * @return CreateContainerServiceDeploymentResponse
     */
    public function createContainerServiceDeployment(CreateContainerServiceDeploymentRequest $args)
    {
        $result = parent::createContainerServiceDeployment($args->toArray());
        return new CreateContainerServiceDeploymentResponse($result->toArray());
    }
}
