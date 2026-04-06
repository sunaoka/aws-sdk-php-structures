<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRuns;

trait ListTestRunsTrait
{
    /**
     * @param ListTestRunsRequest $args
     * @return ListTestRunsResponse
     */
    public function listTestRuns(ListTestRunsRequest $args)
    {
        $result = parent::listTestRuns($args->toArray());
        return new ListTestRunsResponse($result->toArray());
    }
}
