<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob;

trait DescribeInferenceRecommendationsJobTrait
{
    /**
     * @param DescribeInferenceRecommendationsJobRequest $args
     * @return DescribeInferenceRecommendationsJobResponse
     */
    public function describeInferenceRecommendationsJob(DescribeInferenceRecommendationsJobRequest $args)
    {
        $result = parent::describeInferenceRecommendationsJob($args->toArray());
        return new DescribeInferenceRecommendationsJobResponse($result->toArray());
    }
}
