<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobs;

trait ListInferenceRecommendationsJobsTrait
{
    /**
     * @param ListInferenceRecommendationsJobsRequest $args
     * @return ListInferenceRecommendationsJobsResponse
     */
    public function listInferenceRecommendationsJobs(ListInferenceRecommendationsJobsRequest $args)
    {
        $result = parent::listInferenceRecommendationsJobs($args->toArray());
        return new ListInferenceRecommendationsJobsResponse($result->toArray());
    }
}
