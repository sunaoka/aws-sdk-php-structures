<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StopReplicationTask;

trait StopReplicationTaskTrait
{
    /**
     * @param StopReplicationTaskRequest $args
     * @return StopReplicationTaskResponse
     */
    public function stopReplicationTask(StopReplicationTaskRequest $args)
    {
        $result = parent::stopReplicationTask($args->toArray());
        return new StopReplicationTaskResponse($result->toArray());
    }
}
