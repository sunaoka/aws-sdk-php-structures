<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListMediaAnalysisJobs;

trait ListMediaAnalysisJobsTrait
{
    /**
     * @param ListMediaAnalysisJobsRequest $args
     * @return ListMediaAnalysisJobsResponse
     */
    public function listMediaAnalysisJobs(ListMediaAnalysisJobsRequest $args)
    {
        $result = parent::listMediaAnalysisJobs($args->toArray());
        return new ListMediaAnalysisJobsResponse($result->toArray());
    }
}
