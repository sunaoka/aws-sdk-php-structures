<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\GetDeploymentConfigurationJob;

trait GetDeploymentConfigurationJobTrait
{
    /**
     * @param GetDeploymentConfigurationJobRequest $args
     * @return GetDeploymentConfigurationJobResponse
     */
    public function getDeploymentConfigurationJob(GetDeploymentConfigurationJobRequest $args)
    {
        $result = parent::getDeploymentConfigurationJob($args->toArray());
        return new GetDeploymentConfigurationJobResponse($result->toArray());
    }
}
