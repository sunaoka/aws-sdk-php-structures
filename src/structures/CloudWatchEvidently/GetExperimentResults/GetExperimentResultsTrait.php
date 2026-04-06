<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperimentResults;

trait GetExperimentResultsTrait
{
    /**
     * @param GetExperimentResultsRequest $args
     * @return GetExperimentResultsResponse
     */
    public function getExperimentResults(GetExperimentResultsRequest $args)
    {
        $result = parent::getExperimentResults($args->toArray());
        return new GetExperimentResultsResponse($result->toArray());
    }
}
