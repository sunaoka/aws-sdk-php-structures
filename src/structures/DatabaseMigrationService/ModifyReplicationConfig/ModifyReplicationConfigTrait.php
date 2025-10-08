<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationConfig;

trait ModifyReplicationConfigTrait
{
    /**
     * @param ModifyReplicationConfigRequest $args
     * @return ModifyReplicationConfigResponse
     */
    public function modifyReplicationConfig(ModifyReplicationConfigRequest $args)
    {
        $result = parent::modifyReplicationConfig($args->toArray());
        return new ModifyReplicationConfigResponse($result->toArray());
    }
}
