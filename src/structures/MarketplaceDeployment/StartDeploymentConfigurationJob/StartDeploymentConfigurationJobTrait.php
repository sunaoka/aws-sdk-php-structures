<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\StartDeploymentConfigurationJob;

trait StartDeploymentConfigurationJobTrait
{
    /**
     * @param StartDeploymentConfigurationJobRequest $args
     * @return StartDeploymentConfigurationJobResponse
     */
    public function startDeploymentConfigurationJob(StartDeploymentConfigurationJobRequest $args)
    {
        $result = parent::startDeploymentConfigurationJob($args->toArray());
        return new StartDeploymentConfigurationJobResponse($result->toArray());
    }
}
