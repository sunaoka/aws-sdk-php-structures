<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DescribeMigrationTask;

trait DescribeMigrationTaskTrait
{
    /**
     * @param DescribeMigrationTaskRequest $args
     * @return DescribeMigrationTaskResponse
     */
    public function describeMigrationTask(DescribeMigrationTaskRequest $args)
    {
        $result = parent::describeMigrationTask($args->toArray());
        return new DescribeMigrationTaskResponse($result->toArray());
    }
}
