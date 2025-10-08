<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentConfig;

trait GetDeploymentConfigTrait
{
    /**
     * @param GetDeploymentConfigRequest $args
     * @return GetDeploymentConfigResponse
     */
    public function getDeploymentConfig(GetDeploymentConfigRequest $args)
    {
        $result = parent::getDeploymentConfig($args->toArray());
        return new GetDeploymentConfigResponse($result->toArray());
    }
}
