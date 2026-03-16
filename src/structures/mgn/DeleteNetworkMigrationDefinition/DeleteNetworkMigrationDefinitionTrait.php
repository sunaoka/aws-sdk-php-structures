<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteNetworkMigrationDefinition;

trait DeleteNetworkMigrationDefinitionTrait
{
    /**
     * @param DeleteNetworkMigrationDefinitionRequest $args
     * @return DeleteNetworkMigrationDefinitionResponse
     */
    public function deleteNetworkMigrationDefinition(DeleteNetworkMigrationDefinitionRequest $args)
    {
        $result = parent::deleteNetworkMigrationDefinition($args->toArray());
        return new DeleteNetworkMigrationDefinitionResponse($result->toArray());
    }
}
