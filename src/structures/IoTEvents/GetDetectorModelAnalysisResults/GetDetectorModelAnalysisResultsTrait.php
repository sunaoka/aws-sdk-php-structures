<?php

namespace Sunaoka\Aws\Structures\IoTEvents\GetDetectorModelAnalysisResults;

trait GetDetectorModelAnalysisResultsTrait
{
    /**
     * @param GetDetectorModelAnalysisResultsRequest $args
     * @return GetDetectorModelAnalysisResultsResponse
     */
    public function getDetectorModelAnalysisResults(GetDetectorModelAnalysisResultsRequest $args)
    {
        $result = parent::getDetectorModelAnalysisResults($args->toArray());
        return new GetDetectorModelAnalysisResultsResponse($result->toArray());
    }
}
