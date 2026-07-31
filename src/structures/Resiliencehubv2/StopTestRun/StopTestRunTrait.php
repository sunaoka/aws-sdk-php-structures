<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\StopTestRun;

trait StopTestRunTrait
{
    /**
     * @param StopTestRunRequest $args
     * @return StopTestRunResponse
     */
    public function stopTestRun(StopTestRunRequest $args)
    {
        $result = parent::stopTestRun($args->toArray());
        return new StopTestRunResponse($result->toArray());
    }
}
