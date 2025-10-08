<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceLivenessSessionResults;

trait GetFaceLivenessSessionResultsTrait
{
    /**
     * @param GetFaceLivenessSessionResultsRequest $args
     * @return GetFaceLivenessSessionResultsResponse
     */
    public function getFaceLivenessSessionResults(GetFaceLivenessSessionResultsRequest $args)
    {
        $result = parent::getFaceLivenessSessionResults($args->toArray());
        return new GetFaceLivenessSessionResultsResponse($result->toArray());
    }
}
