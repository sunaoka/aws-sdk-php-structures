<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListBulkDeployments;

trait ListBulkDeploymentsTrait
{
    /**
     * @param ListBulkDeploymentsRequest $args
     * @return ListBulkDeploymentsResponse
     */
    public function listBulkDeployments(ListBulkDeploymentsRequest $args)
    {
        $result = parent::listBulkDeployments($args->toArray());
        return new ListBulkDeploymentsResponse($result->toArray());
    }
}
