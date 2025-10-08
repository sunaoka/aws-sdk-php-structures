<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations;

trait DescribeDBRecommendationsTrait
{
    /**
     * @param DescribeDBRecommendationsRequest $args
     * @return DescribeDBRecommendationsResponse
     */
    public function describeDBRecommendations(DescribeDBRecommendationsRequest $args)
    {
        $result = parent::describeDBRecommendations($args->toArray());
        return new DescribeDBRecommendationsResponse($result->toArray());
    }
}
