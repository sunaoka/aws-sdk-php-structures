<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanaryRuns;

trait GetCanaryRunsTrait
{
    /**
     * @param GetCanaryRunsRequest $args
     * @return GetCanaryRunsResponse
     */
    public function getCanaryRuns(GetCanaryRunsRequest $args)
    {
        $result = parent::getCanaryRuns($args->toArray());
        return new GetCanaryRunsResponse($result->toArray());
    }
}
