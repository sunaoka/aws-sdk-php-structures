<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIRecommendationJob;

trait CreateAIRecommendationJobTrait
{
    /**
     * @param CreateAIRecommendationJobRequest $args
     * @return CreateAIRecommendationJobResponse
     */
    public function createAIRecommendationJob(CreateAIRecommendationJobRequest $args)
    {
        $result = parent::createAIRecommendationJob($args->toArray());
        return new CreateAIRecommendationJobResponse($result->toArray());
    }
}
