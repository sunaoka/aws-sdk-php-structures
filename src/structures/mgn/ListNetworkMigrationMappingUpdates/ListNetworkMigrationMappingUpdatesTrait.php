<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMappingUpdates;

trait ListNetworkMigrationMappingUpdatesTrait
{
    /**
     * @param ListNetworkMigrationMappingUpdatesRequest $args
     * @return ListNetworkMigrationMappingUpdatesResponse
     */
    public function listNetworkMigrationMappingUpdates(ListNetworkMigrationMappingUpdatesRequest $args)
    {
        $result = parent::listNetworkMigrationMappingUpdates($args->toArray());
        return new ListNetworkMigrationMappingUpdatesResponse($result->toArray());
    }
}
