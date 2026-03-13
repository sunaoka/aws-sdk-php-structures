<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationDeployedStacks;

trait ListNetworkMigrationDeployedStacksTrait
{
    /**
     * @param ListNetworkMigrationDeployedStacksRequest $args
     * @return ListNetworkMigrationDeployedStacksResponse
     */
    public function listNetworkMigrationDeployedStacks(ListNetworkMigrationDeployedStacksRequest $args)
    {
        $result = parent::listNetworkMigrationDeployedStacks($args->toArray());
        return new ListNetworkMigrationDeployedStacksResponse($result->toArray());
    }
}
