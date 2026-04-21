<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAIRecommendationJobs;

trait ListAIRecommendationJobsTrait
{
    /**
     * @param ListAIRecommendationJobsRequest $args
     * @return ListAIRecommendationJobsResponse
     */
    public function listAIRecommendationJobs(ListAIRecommendationJobsRequest $args)
    {
        $result = parent::listAIRecommendationJobs($args->toArray());
        return new ListAIRecommendationJobsResponse($result->toArray());
    }
}
