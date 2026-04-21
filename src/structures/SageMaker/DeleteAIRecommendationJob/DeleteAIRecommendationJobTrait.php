<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAIRecommendationJob;

trait DeleteAIRecommendationJobTrait
{
    /**
     * @param DeleteAIRecommendationJobRequest $args
     * @return DeleteAIRecommendationJobResponse
     */
    public function deleteAIRecommendationJob(DeleteAIRecommendationJobRequest $args)
    {
        $result = parent::deleteAIRecommendationJob($args->toArray());
        return new DeleteAIRecommendationJobResponse($result->toArray());
    }
}
