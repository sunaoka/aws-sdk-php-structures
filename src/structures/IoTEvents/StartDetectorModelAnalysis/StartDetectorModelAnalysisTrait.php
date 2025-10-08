<?php

namespace Sunaoka\Aws\Structures\IoTEvents\StartDetectorModelAnalysis;

trait StartDetectorModelAnalysisTrait
{
    /**
     * @param StartDetectorModelAnalysisRequest $args
     * @return StartDetectorModelAnalysisResponse
     */
    public function startDetectorModelAnalysis(StartDetectorModelAnalysisRequest $args)
    {
        $result = parent::startDetectorModelAnalysis($args->toArray());
        return new StartDetectorModelAnalysisResponse($result->toArray());
    }
}
