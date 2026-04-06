<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskRun;

trait GetColumnStatisticsTaskRunTrait
{
    /**
     * @param GetColumnStatisticsTaskRunRequest $args
     * @return GetColumnStatisticsTaskRunResponse
     */
    public function getColumnStatisticsTaskRun(GetColumnStatisticsTaskRunRequest $args)
    {
        $result = parent::getColumnStatisticsTaskRun($args->toArray());
        return new GetColumnStatisticsTaskRunResponse($result->toArray());
    }
}
