<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationTask;

trait DeleteReplicationTaskTrait
{
    /**
     * @param DeleteReplicationTaskRequest $args
     * @return DeleteReplicationTaskResponse
     */
    public function deleteReplicationTask(DeleteReplicationTaskRequest $args)
    {
        $result = parent::deleteReplicationTask($args->toArray());
        return new DeleteReplicationTaskResponse($result->toArray());
    }
}
