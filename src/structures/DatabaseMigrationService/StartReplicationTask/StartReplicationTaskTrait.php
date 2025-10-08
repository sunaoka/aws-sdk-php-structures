<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplicationTask;

trait StartReplicationTaskTrait
{
    /**
     * @param StartReplicationTaskRequest $args
     * @return StartReplicationTaskResponse
     */
    public function startReplicationTask(StartReplicationTaskRequest $args)
    {
        $result = parent::startReplicationTask($args->toArray());
        return new StartReplicationTaskResponse($result->toArray());
    }
}
