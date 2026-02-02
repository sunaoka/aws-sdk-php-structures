<?php

namespace Sunaoka\Aws\Structures\Glue\StartMaterializedViewRefreshTaskRun;

trait StartMaterializedViewRefreshTaskRunTrait
{
    /**
     * @param StartMaterializedViewRefreshTaskRunRequest $args
     * @return StartMaterializedViewRefreshTaskRunResponse
     */
    public function startMaterializedViewRefreshTaskRun(StartMaterializedViewRefreshTaskRunRequest $args)
    {
        $result = parent::startMaterializedViewRefreshTaskRun($args->toArray());
        return new StartMaterializedViewRefreshTaskRunResponse($result->toArray());
    }
}
