<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults;

trait GetJobsQueryResultsTrait
{
    /**
     * @param GetJobsQueryResultsRequest $args
     * @return GetJobsQueryResultsResponse
     */
    public function getJobsQueryResults(GetJobsQueryResultsRequest $args)
    {
        $result = parent::getJobsQueryResults($args->toArray());
        return new GetJobsQueryResultsResponse($result->toArray());
    }
}
