<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate;

trait StartNetworkMigrationMappingUpdateTrait
{
    /**
     * @param StartNetworkMigrationMappingUpdateRequest $args
     * @return StartNetworkMigrationMappingUpdateResponse
     */
    public function startNetworkMigrationMappingUpdate(StartNetworkMigrationMappingUpdateRequest $args)
    {
        $result = parent::startNetworkMigrationMappingUpdate($args->toArray());
        return new StartNetworkMigrationMappingUpdateResponse($result->toArray());
    }
}
