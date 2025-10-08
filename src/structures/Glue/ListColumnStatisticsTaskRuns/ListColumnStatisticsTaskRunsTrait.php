<?php

namespace Sunaoka\Aws\Structures\Glue\ListColumnStatisticsTaskRuns;

trait ListColumnStatisticsTaskRunsTrait
{
    /**
     * @param ListColumnStatisticsTaskRunsRequest $args
     * @return ListColumnStatisticsTaskRunsResponse
     */
    public function listColumnStatisticsTaskRuns(ListColumnStatisticsTaskRunsRequest $args)
    {
        $result = parent::listColumnStatisticsTaskRuns($args->toArray());
        return new ListColumnStatisticsTaskRunsResponse($result->toArray());
    }
}
