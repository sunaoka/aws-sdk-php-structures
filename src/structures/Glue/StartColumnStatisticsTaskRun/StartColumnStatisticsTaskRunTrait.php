<?php

namespace Sunaoka\Aws\Structures\Glue\StartColumnStatisticsTaskRun;

trait StartColumnStatisticsTaskRunTrait
{
    /**
     * @param StartColumnStatisticsTaskRunRequest $args
     * @return StartColumnStatisticsTaskRunResponse
     */
    public function startColumnStatisticsTaskRun(StartColumnStatisticsTaskRunRequest $args)
    {
        $result = parent::startColumnStatisticsTaskRun($args->toArray());
        return new StartColumnStatisticsTaskRunResponse($result->toArray());
    }
}
