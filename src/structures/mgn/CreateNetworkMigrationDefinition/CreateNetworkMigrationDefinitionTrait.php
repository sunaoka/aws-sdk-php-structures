<?php

namespace Sunaoka\Aws\Structures\mgn\CreateNetworkMigrationDefinition;

trait CreateNetworkMigrationDefinitionTrait
{
    /**
     * @param CreateNetworkMigrationDefinitionRequest $args
     * @return CreateNetworkMigrationDefinitionResponse
     */
    public function createNetworkMigrationDefinition(CreateNetworkMigrationDefinitionRequest $args)
    {
        $result = parent::createNetworkMigrationDefinition($args->toArray());
        return new CreateNetworkMigrationDefinitionResponse($result->toArray());
    }
}
