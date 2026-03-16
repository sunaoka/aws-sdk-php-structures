<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateNetworkMigrationDefinition;

trait UpdateNetworkMigrationDefinitionTrait
{
    /**
     * @param UpdateNetworkMigrationDefinitionRequest $args
     * @return UpdateNetworkMigrationDefinitionResponse
     */
    public function updateNetworkMigrationDefinition(UpdateNetworkMigrationDefinitionRequest $args)
    {
        $result = parent::updateNetworkMigrationDefinition($args->toArray());
        return new UpdateNetworkMigrationDefinitionResponse($result->toArray());
    }
}
