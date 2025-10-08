<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobSteps;

trait ListInferenceRecommendationsJobStepsTrait
{
    /**
     * @param ListInferenceRecommendationsJobStepsRequest $args
     * @return ListInferenceRecommendationsJobStepsResponse
     */
    public function listInferenceRecommendationsJobSteps(ListInferenceRecommendationsJobStepsRequest $args)
    {
        $result = parent::listInferenceRecommendationsJobSteps($args->toArray());
        return new ListInferenceRecommendationsJobStepsResponse($result->toArray());
    }
}
