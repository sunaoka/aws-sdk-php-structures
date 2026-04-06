<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskRuns;

trait GetColumnStatisticsTaskRunsTrait
{
    /**
     * @param GetColumnStatisticsTaskRunsRequest $args
     * @return GetColumnStatisticsTaskRunsResponse
     */
    public function getColumnStatisticsTaskRuns(GetColumnStatisticsTaskRunsRequest $args)
    {
        $result = parent::getColumnStatisticsTaskRuns($args->toArray());
        return new GetColumnStatisticsTaskRunsResponse($result->toArray());
    }
}
