<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\DescribeRecommendationExportJobs;

trait DescribeRecommendationExportJobsTrait
{
    /**
     * @param DescribeRecommendationExportJobsRequest $args
     * @return DescribeRecommendationExportJobsResponse
     */
    public function describeRecommendationExportJobs(DescribeRecommendationExportJobsRequest $args)
    {
        $result = parent::describeRecommendationExportJobs($args->toArray());
        return new DescribeRecommendationExportJobsResponse($result->toArray());
    }
}
