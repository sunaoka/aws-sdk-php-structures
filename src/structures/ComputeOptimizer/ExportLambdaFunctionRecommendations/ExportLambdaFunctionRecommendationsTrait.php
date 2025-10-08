<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportLambdaFunctionRecommendations;

trait ExportLambdaFunctionRecommendationsTrait
{
    /**
     * @param ExportLambdaFunctionRecommendationsRequest $args
     * @return ExportLambdaFunctionRecommendationsResponse
     */
    public function exportLambdaFunctionRecommendations(ExportLambdaFunctionRecommendationsRequest $args)
    {
        $result = parent::exportLambdaFunctionRecommendations($args->toArray());
        return new ExportLambdaFunctionRecommendationsResponse($result->toArray());
    }
}
