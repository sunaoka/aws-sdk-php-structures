<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListMigrationTaskUpdates;

trait ListMigrationTaskUpdatesTrait
{
    /**
     * @param ListMigrationTaskUpdatesRequest $args
     * @return ListMigrationTaskUpdatesResponse
     */
    public function listMigrationTaskUpdates(ListMigrationTaskUpdatesRequest $args)
    {
        $result = parent::listMigrationTaskUpdates($args->toArray());
        return new ListMigrationTaskUpdatesResponse($result->toArray());
    }
}
