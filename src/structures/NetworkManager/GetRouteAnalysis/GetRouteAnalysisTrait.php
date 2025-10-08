<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetRouteAnalysis;

trait GetRouteAnalysisTrait
{
    /**
     * @param GetRouteAnalysisRequest $args
     * @return GetRouteAnalysisResponse
     */
    public function getRouteAnalysis(GetRouteAnalysisRequest $args)
    {
        $result = parent::getRouteAnalysis($args->toArray());
        return new GetRouteAnalysisResponse($result->toArray());
    }
}
