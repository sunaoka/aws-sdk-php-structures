<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob;

trait CreateInferenceRecommendationsJobTrait
{
    /**
     * @param CreateInferenceRecommendationsJobRequest $args
     * @return CreateInferenceRecommendationsJobResponse
     */
    public function createInferenceRecommendationsJob(CreateInferenceRecommendationsJobRequest $args)
    {
        $result = parent::createInferenceRecommendationsJob($args->toArray());
        return new CreateInferenceRecommendationsJobResponse($result->toArray());
    }
}
