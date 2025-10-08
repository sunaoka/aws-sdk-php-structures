<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ReportTaskRunnerHeartbeat;

trait ReportTaskRunnerHeartbeatTrait
{
    /**
     * @param ReportTaskRunnerHeartbeatRequest $args
     * @return ReportTaskRunnerHeartbeatResponse
     */
    public function reportTaskRunnerHeartbeat(ReportTaskRunnerHeartbeatRequest $args)
    {
        $result = parent::reportTaskRunnerHeartbeat($args->toArray());
        return new ReportTaskRunnerHeartbeatResponse($result->toArray());
    }
}
