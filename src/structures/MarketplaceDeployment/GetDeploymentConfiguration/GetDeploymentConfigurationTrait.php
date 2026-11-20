<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\GetDeploymentConfiguration;

trait GetDeploymentConfigurationTrait
{
    /**
     * @param GetDeploymentConfigurationRequest $args
     * @return GetDeploymentConfigurationResponse
     */
    public function getDeploymentConfiguration(GetDeploymentConfigurationRequest $args)
    {
        $result = parent::getDeploymentConfiguration($args->toArray());
        return new GetDeploymentConfigurationResponse($result->toArray());
    }
}
