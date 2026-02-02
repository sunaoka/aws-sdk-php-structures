<?php

namespace Sunaoka\Aws\Structures\Glue\StopMaterializedViewRefreshTaskRun;

trait StopMaterializedViewRefreshTaskRunTrait
{
    /**
     * @param StopMaterializedViewRefreshTaskRunRequest $args
     * @return StopMaterializedViewRefreshTaskRunResponse
     */
    public function stopMaterializedViewRefreshTaskRun(StopMaterializedViewRefreshTaskRunRequest $args)
    {
        $result = parent::stopMaterializedViewRefreshTaskRun($args->toArray());
        return new StopMaterializedViewRefreshTaskRunResponse($result->toArray());
    }
}
