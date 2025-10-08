<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations;

trait GetLambdaFunctionRecommendationsTrait
{
    /**
     * @param GetLambdaFunctionRecommendationsRequest $args
     * @return GetLambdaFunctionRecommendationsResponse
     */
    public function getLambdaFunctionRecommendations(GetLambdaFunctionRecommendationsRequest $args)
    {
        $result = parent::getLambdaFunctionRecommendations($args->toArray());
        return new GetLambdaFunctionRecommendationsResponse($result->toArray());
    }
}
