<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentConfig;

trait CreateDeploymentConfigTrait
{
    /**
     * @param CreateDeploymentConfigRequest $args
     * @return CreateDeploymentConfigResponse
     */
    public function createDeploymentConfig(CreateDeploymentConfigRequest $args)
    {
        $result = parent::createDeploymentConfig($args->toArray());
        return new CreateDeploymentConfigResponse($result->toArray());
    }
}
