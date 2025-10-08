<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeleteDeploymentConfig;

trait DeleteDeploymentConfigTrait
{
    /**
     * @param DeleteDeploymentConfigRequest $args
     * @return void
     */
    public function deleteDeploymentConfig(DeleteDeploymentConfigRequest $args)
    {
        parent::deleteDeploymentConfig($args->toArray());
    }
}
