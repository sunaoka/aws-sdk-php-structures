<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendationLimitations;

trait DescribeRecommendationLimitationsTrait
{
    /**
     * @param DescribeRecommendationLimitationsRequest $args
     * @return DescribeRecommendationLimitationsResponse
     */
    public function describeRecommendationLimitations(DescribeRecommendationLimitationsRequest $args)
    {
        $result = parent::describeRecommendationLimitations($args->toArray());
        return new DescribeRecommendationLimitationsResponse($result->toArray());
    }
}
