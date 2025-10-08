<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\StopJobRun;

trait StopJobRunTrait
{
    /**
     * @param StopJobRunRequest $args
     * @return StopJobRunResponse
     */
    public function stopJobRun(StopJobRunRequest $args)
    {
        $result = parent::stopJobRun($args->toArray());
        return new StopJobRunResponse($result->toArray());
    }
}
