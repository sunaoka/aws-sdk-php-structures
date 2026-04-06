<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMappings;

trait ListNetworkMigrationMappingsTrait
{
    /**
     * @param ListNetworkMigrationMappingsRequest $args
     * @return ListNetworkMigrationMappingsResponse
     */
    public function listNetworkMigrationMappings(ListNetworkMigrationMappingsRequest $args)
    {
        $result = parent::listNetworkMigrationMappings($args->toArray());
        return new ListNetworkMigrationMappingsResponse($result->toArray());
    }
}
