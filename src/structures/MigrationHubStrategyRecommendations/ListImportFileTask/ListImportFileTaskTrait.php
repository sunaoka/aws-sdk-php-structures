<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListImportFileTask;

trait ListImportFileTaskTrait
{
    /**
     * @param ListImportFileTaskRequest $args
     * @return ListImportFileTaskResponse
     */
    public function listImportFileTask(ListImportFileTaskRequest $args)
    {
        $result = parent::listImportFileTask($args->toArray());
        return new ListImportFileTaskResponse($result->toArray());
    }
}
