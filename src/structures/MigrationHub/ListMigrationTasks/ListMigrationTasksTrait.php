<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListMigrationTasks;

trait ListMigrationTasksTrait
{
    /**
     * @param ListMigrationTasksRequest $args
     * @return ListMigrationTasksResponse
     */
    public function listMigrationTasks(ListMigrationTasksRequest $args)
    {
        $result = parent::listMigrationTasks($args->toArray());
        return new ListMigrationTasksResponse($result->toArray());
    }
}
