<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\ListDeploymentConfigurationJobs;

trait ListDeploymentConfigurationJobsTrait
{
    /**
     * @param ListDeploymentConfigurationJobsRequest $args
     * @return ListDeploymentConfigurationJobsResponse
     */
    public function listDeploymentConfigurationJobs(ListDeploymentConfigurationJobsRequest $args)
    {
        $result = parent::listDeploymentConfigurationJobs($args->toArray());
        return new ListDeploymentConfigurationJobsResponse($result->toArray());
    }
}
