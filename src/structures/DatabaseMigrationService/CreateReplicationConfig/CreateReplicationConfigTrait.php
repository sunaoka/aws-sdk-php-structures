<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationConfig;

trait CreateReplicationConfigTrait
{
    /**
     * @param CreateReplicationConfigRequest $args
     * @return CreateReplicationConfigResponse
     */
    public function createReplicationConfig(CreateReplicationConfigRequest $args)
    {
        $result = parent::createReplicationConfig($args->toArray());
        return new CreateReplicationConfigResponse($result->toArray());
    }
}
