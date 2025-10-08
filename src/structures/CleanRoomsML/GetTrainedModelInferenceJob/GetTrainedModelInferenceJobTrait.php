<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModelInferenceJob;

trait GetTrainedModelInferenceJobTrait
{
    /**
     * @param GetTrainedModelInferenceJobRequest $args
     * @return GetTrainedModelInferenceJobResponse
     */
    public function getTrainedModelInferenceJob(GetTrainedModelInferenceJobRequest $args)
    {
        $result = parent::getTrainedModelInferenceJob($args->toArray());
        return new GetTrainedModelInferenceJobResponse($result->toArray());
    }
}
