<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartRouteAnalysis;

trait StartRouteAnalysisTrait
{
    /**
     * @param StartRouteAnalysisRequest $args
     * @return StartRouteAnalysisResponse
     */
    public function startRouteAnalysis(StartRouteAnalysisRequest $args)
    {
        $result = parent::startRouteAnalysis($args->toArray());
        return new StartRouteAnalysisResponse($result->toArray());
    }
}
