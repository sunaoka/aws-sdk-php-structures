<?php

namespace Sunaoka\Aws\Structures\mgn\GetNetworkMigrationDefinition;

trait GetNetworkMigrationDefinitionTrait
{
    /**
     * @param GetNetworkMigrationDefinitionRequest $args
     * @return GetNetworkMigrationDefinitionResponse
     */
    public function getNetworkMigrationDefinition(GetNetworkMigrationDefinitionRequest $args)
    {
        $result = parent::getNetworkMigrationDefinition($args->toArray());
        return new GetNetworkMigrationDefinitionResponse($result->toArray());
    }
}
