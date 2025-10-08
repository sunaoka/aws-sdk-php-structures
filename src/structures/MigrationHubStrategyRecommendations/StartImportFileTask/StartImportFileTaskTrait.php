<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\StartImportFileTask;

trait StartImportFileTaskTrait
{
    /**
     * @param StartImportFileTaskRequest $args
     * @return StartImportFileTaskResponse
     */
    public function startImportFileTask(StartImportFileTaskRequest $args)
    {
        $result = parent::startImportFileTask($args->toArray());
        return new StartImportFileTaskResponse($result->toArray());
    }
}
