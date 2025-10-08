<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListJobRuns;

trait ListJobRunsTrait
{
    /**
     * @param ListJobRunsRequest $args
     * @return ListJobRunsResponse
     */
    public function listJobRuns(ListJobRunsRequest $args)
    {
        $result = parent::listJobRuns($args->toArray());
        return new ListJobRunsResponse($result->toArray());
    }
}
