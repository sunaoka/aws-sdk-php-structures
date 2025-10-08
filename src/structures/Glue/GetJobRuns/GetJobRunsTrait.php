<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobRuns;

trait GetJobRunsTrait
{
    /**
     * @param GetJobRunsRequest $args
     * @return GetJobRunsResponse
     */
    public function getJobRuns(GetJobRunsRequest $args)
    {
        $result = parent::getJobRuns($args->toArray());
        return new GetJobRunsResponse($result->toArray());
    }
}
