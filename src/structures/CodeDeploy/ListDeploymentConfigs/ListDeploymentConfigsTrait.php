<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeploymentConfigs;

trait ListDeploymentConfigsTrait
{
    /**
     * @param ListDeploymentConfigsRequest $args
     * @return ListDeploymentConfigsResponse
     */
    public function listDeploymentConfigs(ListDeploymentConfigsRequest $args)
    {
        $result = parent::listDeploymentConfigs($args->toArray());
        return new ListDeploymentConfigsResponse($result->toArray());
    }
}
