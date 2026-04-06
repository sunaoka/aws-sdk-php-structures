<?php

namespace Sunaoka\Aws\Structures\Glue\StopColumnStatisticsTaskRun;

trait StopColumnStatisticsTaskRunTrait
{
    /**
     * @param StopColumnStatisticsTaskRunRequest $args
     * @return StopColumnStatisticsTaskRunResponse
     */
    public function stopColumnStatisticsTaskRun(StopColumnStatisticsTaskRunRequest $args)
    {
        $result = parent::stopColumnStatisticsTaskRun($args->toArray());
        return new StopColumnStatisticsTaskRunResponse($result->toArray());
    }
}
