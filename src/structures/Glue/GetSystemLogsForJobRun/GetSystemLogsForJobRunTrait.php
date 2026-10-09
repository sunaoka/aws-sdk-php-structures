<?php

namespace Sunaoka\Aws\Structures\Glue\GetSystemLogsForJobRun;

trait GetSystemLogsForJobRunTrait
{
    /**
     * @param GetSystemLogsForJobRunRequest $args
     * @return GetSystemLogsForJobRunResponse
     */
    public function getSystemLogsForJobRun(GetSystemLogsForJobRunRequest $args)
    {
        $result = parent::getSystemLogsForJobRun($args->toArray());
        return new GetSystemLogsForJobRunResponse($result->toArray());
    }
}
