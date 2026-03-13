<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMapping;

trait StartNetworkMigrationMappingTrait
{
    /**
     * @param StartNetworkMigrationMappingRequest $args
     * @return StartNetworkMigrationMappingResponse
     */
    public function startNetworkMigrationMapping(StartNetworkMigrationMappingRequest $args)
    {
        $result = parent::startNetworkMigrationMapping($args->toArray());
        return new StartNetworkMigrationMappingResponse($result->toArray());
    }
}
