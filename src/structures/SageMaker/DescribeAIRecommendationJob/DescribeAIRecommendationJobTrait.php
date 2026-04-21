<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob;

trait DescribeAIRecommendationJobTrait
{
    /**
     * @param DescribeAIRecommendationJobRequest $args
     * @return DescribeAIRecommendationJobResponse
     */
    public function describeAIRecommendationJob(DescribeAIRecommendationJobRequest $args)
    {
        $result = parent::describeAIRecommendationJob($args->toArray());
        return new DescribeAIRecommendationJobResponse($result->toArray());
    }
}
