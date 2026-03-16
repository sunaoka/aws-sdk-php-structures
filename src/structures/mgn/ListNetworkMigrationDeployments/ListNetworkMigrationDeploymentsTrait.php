<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationDeployments;

trait ListNetworkMigrationDeploymentsTrait
{
    /**
     * @param ListNetworkMigrationDeploymentsRequest $args
     * @return ListNetworkMigrationDeploymentsResponse
     */
    public function listNetworkMigrationDeployments(ListNetworkMigrationDeploymentsRequest $args)
    {
        $result = parent::listNetworkMigrationDeployments($args->toArray());
        return new ListNetworkMigrationDeploymentsResponse($result->toArray());
    }
}
