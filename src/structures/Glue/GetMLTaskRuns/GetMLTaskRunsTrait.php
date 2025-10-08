<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRuns;

trait GetMLTaskRunsTrait
{
    /**
     * @param GetMLTaskRunsRequest $args
     * @return GetMLTaskRunsResponse
     */
    public function getMLTaskRuns(GetMLTaskRunsRequest $args)
    {
        $result = parent::getMLTaskRuns($args->toArray());
        return new GetMLTaskRunsResponse($result->toArray());
    }
}
