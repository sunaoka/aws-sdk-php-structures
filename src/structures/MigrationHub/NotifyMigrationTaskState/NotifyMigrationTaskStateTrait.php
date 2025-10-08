<?php

namespace Sunaoka\Aws\Structures\MigrationHub\NotifyMigrationTaskState;

trait NotifyMigrationTaskStateTrait
{
    /**
     * @param NotifyMigrationTaskStateRequest $args
     * @return NotifyMigrationTaskStateResponse
     */
    public function notifyMigrationTaskState(NotifyMigrationTaskStateRequest $args)
    {
        $result = parent::notifyMigrationTaskState($args->toArray());
        return new NotifyMigrationTaskStateResponse($result->toArray());
    }
}
