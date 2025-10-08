<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\MoveReplicationTask;

trait MoveReplicationTaskTrait
{
    /**
     * @param MoveReplicationTaskRequest $args
     * @return MoveReplicationTaskResponse
     */
    public function moveReplicationTask(MoveReplicationTaskRequest $args)
    {
        $result = parent::moveReplicationTask($args->toArray());
        return new MoveReplicationTaskResponse($result->toArray());
    }
}
