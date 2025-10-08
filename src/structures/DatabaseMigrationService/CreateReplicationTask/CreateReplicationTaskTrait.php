<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationTask;

trait CreateReplicationTaskTrait
{
    /**
     * @param CreateReplicationTaskRequest $args
     * @return CreateReplicationTaskResponse
     */
    public function createReplicationTask(CreateReplicationTaskRequest $args)
    {
        $result = parent::createReplicationTask($args->toArray());
        return new CreateReplicationTaskResponse($result->toArray());
    }
}
