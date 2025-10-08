<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopInferenceRecommendationsJob;

trait StopInferenceRecommendationsJobTrait
{
    /**
     * @param StopInferenceRecommendationsJobRequest $args
     * @return void
     */
    public function stopInferenceRecommendationsJob(StopInferenceRecommendationsJobRequest $args)
    {
        parent::stopInferenceRecommendationsJob($args->toArray());
    }
}
