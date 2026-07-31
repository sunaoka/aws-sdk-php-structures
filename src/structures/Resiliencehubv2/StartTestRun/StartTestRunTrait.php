<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\StartTestRun;

trait StartTestRunTrait
{
    /**
     * @param StartTestRunRequest $args
     * @return StartTestRunResponse
     */
    public function startTestRun(StartTestRunRequest $args)
    {
        $result = parent::startTestRun($args->toArray());
        return new StartTestRunResponse($result->toArray());
    }
}
