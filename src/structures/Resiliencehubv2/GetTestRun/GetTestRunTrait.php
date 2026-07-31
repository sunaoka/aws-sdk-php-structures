<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTestRun;

trait GetTestRunTrait
{
    /**
     * @param GetTestRunRequest $args
     * @return GetTestRunResponse
     */
    public function getTestRun(GetTestRunRequest $args)
    {
        $result = parent::getTestRun($args->toArray());
        return new GetTestRunResponse($result->toArray());
    }
}
