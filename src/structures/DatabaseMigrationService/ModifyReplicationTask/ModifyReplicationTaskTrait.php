<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationTask;

trait ModifyReplicationTaskTrait
{
    /**
     * @param ModifyReplicationTaskRequest $args
     * @return ModifyReplicationTaskResponse
     */
    public function modifyReplicationTask(ModifyReplicationTaskRequest $args)
    {
        $result = parent::modifyReplicationTask($args->toArray());
        return new ModifyReplicationTaskResponse($result->toArray());
    }
}
