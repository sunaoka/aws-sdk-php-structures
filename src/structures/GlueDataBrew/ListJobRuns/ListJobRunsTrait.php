<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobRuns;

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
