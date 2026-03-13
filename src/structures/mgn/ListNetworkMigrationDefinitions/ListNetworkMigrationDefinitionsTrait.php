<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationDefinitions;

trait ListNetworkMigrationDefinitionsTrait
{
    /**
     * @param ListNetworkMigrationDefinitionsRequest $args
     * @return ListNetworkMigrationDefinitionsResponse
     */
    public function listNetworkMigrationDefinitions(ListNetworkMigrationDefinitionsRequest $args)
    {
        $result = parent::listNetworkMigrationDefinitions($args->toArray());
        return new ListNetworkMigrationDefinitionsResponse($result->toArray());
    }
}
