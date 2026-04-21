<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopAIRecommendationJob;

trait StopAIRecommendationJobTrait
{
    /**
     * @param StopAIRecommendationJobRequest $args
     * @return StopAIRecommendationJobResponse
     */
    public function stopAIRecommendationJob(StopAIRecommendationJobRequest $args)
    {
        $result = parent::stopAIRecommendationJob($args->toArray());
        return new StopAIRecommendationJobResponse($result->toArray());
    }
}
