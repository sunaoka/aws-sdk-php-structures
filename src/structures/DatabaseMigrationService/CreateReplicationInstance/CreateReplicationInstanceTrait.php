<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationInstance;

trait CreateReplicationInstanceTrait
{
    /**
     * @param CreateReplicationInstanceRequest $args
     * @return CreateReplicationInstanceResponse
     */
    public function createReplicationInstance(CreateReplicationInstanceRequest $args)
    {
        $result = parent::createReplicationInstance($args->toArray());
        return new CreateReplicationInstanceResponse($result->toArray());
    }
}
