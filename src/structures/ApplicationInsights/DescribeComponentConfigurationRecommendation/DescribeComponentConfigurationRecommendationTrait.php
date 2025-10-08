<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeComponentConfigurationRecommendation;

trait DescribeComponentConfigurationRecommendationTrait
{
    /**
     * @param DescribeComponentConfigurationRecommendationRequest $args
     * @return DescribeComponentConfigurationRecommendationResponse
     */
    public function describeComponentConfigurationRecommendation(DescribeComponentConfigurationRecommendationRequest $args)
    {
        $result = parent::describeComponentConfigurationRecommendation($args->toArray());
        return new DescribeComponentConfigurationRecommendationResponse($result->toArray());
    }
}
