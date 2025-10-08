<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendations;

trait DescribeRecommendationsTrait
{
    /**
     * @param DescribeRecommendationsRequest $args
     * @return DescribeRecommendationsResponse
     */
    public function describeRecommendations(DescribeRecommendationsRequest $args)
    {
        $result = parent::describeRecommendations($args->toArray());
        return new DescribeRecommendationsResponse($result->toArray());
    }
}
