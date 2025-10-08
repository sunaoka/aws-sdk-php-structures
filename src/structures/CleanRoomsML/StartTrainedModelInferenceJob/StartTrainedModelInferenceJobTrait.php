<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartTrainedModelInferenceJob;

trait StartTrainedModelInferenceJobTrait
{
    /**
     * @param StartTrainedModelInferenceJobRequest $args
     * @return StartTrainedModelInferenceJobResponse
     */
    public function startTrainedModelInferenceJob(StartTrainedModelInferenceJobRequest $args)
    {
        $result = parent::startTrainedModelInferenceJob($args->toArray());
        return new StartTrainedModelInferenceJobResponse($result->toArray());
    }
}
