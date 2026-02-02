<?php

namespace Sunaoka\Aws\Structures\Glue\GetMaterializedViewRefreshTaskRun;

trait GetMaterializedViewRefreshTaskRunTrait
{
    /**
     * @param GetMaterializedViewRefreshTaskRunRequest $args
     * @return GetMaterializedViewRefreshTaskRunResponse
     */
    public function getMaterializedViewRefreshTaskRun(GetMaterializedViewRefreshTaskRunRequest $args)
    {
        $result = parent::getMaterializedViewRefreshTaskRun($args->toArray());
        return new GetMaterializedViewRefreshTaskRunResponse($result->toArray());
    }
}
