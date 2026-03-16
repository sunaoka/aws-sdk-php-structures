<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationCodeGenerations;

trait ListNetworkMigrationCodeGenerationsTrait
{
    /**
     * @param ListNetworkMigrationCodeGenerationsRequest $args
     * @return ListNetworkMigrationCodeGenerationsResponse
     */
    public function listNetworkMigrationCodeGenerations(ListNetworkMigrationCodeGenerationsRequest $args)
    {
        $result = parent::listNetworkMigrationCodeGenerations($args->toArray());
        return new ListNetworkMigrationCodeGenerationsResponse($result->toArray());
    }
}
