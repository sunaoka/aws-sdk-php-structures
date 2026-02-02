<?php

namespace Sunaoka\Aws\Structures\Glue\ListMaterializedViewRefreshTaskRuns;

trait ListMaterializedViewRefreshTaskRunsTrait
{
    /**
     * @param ListMaterializedViewRefreshTaskRunsRequest $args
     * @return ListMaterializedViewRefreshTaskRunsResponse
     */
    public function listMaterializedViewRefreshTaskRuns(ListMaterializedViewRefreshTaskRunsRequest $args)
    {
        $result = parent::listMaterializedViewRefreshTaskRuns($args->toArray());
        return new ListMaterializedViewRefreshTaskRunsResponse($result->toArray());
    }
}
