<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ImportMigrationTask;

trait ImportMigrationTaskTrait
{
    /**
     * @param ImportMigrationTaskRequest $args
     * @return ImportMigrationTaskResponse
     */
    public function importMigrationTask(ImportMigrationTaskRequest $args)
    {
        $result = parent::importMigrationTask($args->toArray());
        return new ImportMigrationTaskResponse($result->toArray());
    }
}
