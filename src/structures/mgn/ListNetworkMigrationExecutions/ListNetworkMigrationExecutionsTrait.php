<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationExecutions;

trait ListNetworkMigrationExecutionsTrait
{
    /**
     * @param ListNetworkMigrationExecutionsRequest $args
     * @return ListNetworkMigrationExecutionsResponse
     */
    public function listNetworkMigrationExecutions(ListNetworkMigrationExecutionsRequest $args)
    {
        $result = parent::listNetworkMigrationExecutions($args->toArray());
        return new ListNetworkMigrationExecutionsResponse($result->toArray());
    }
}
