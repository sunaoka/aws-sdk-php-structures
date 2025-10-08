<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetImportFileTask;

trait GetImportFileTaskTrait
{
    /**
     * @param GetImportFileTaskRequest $args
     * @return GetImportFileTaskResponse
     */
    public function getImportFileTask(GetImportFileTaskRequest $args)
    {
        $result = parent::getImportFileTask($args->toArray());
        return new GetImportFileTaskResponse($result->toArray());
    }
}
