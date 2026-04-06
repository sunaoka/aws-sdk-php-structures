<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CancelTrainedModelInferenceJob;

trait CancelTrainedModelInferenceJobTrait
{
    /**
     * @param CancelTrainedModelInferenceJobRequest $args
     * @return void
     */
    public function cancelTrainedModelInferenceJob(CancelTrainedModelInferenceJobRequest $args)
    {
        parent::cancelTrainedModelInferenceJob($args->toArray());
    }
}
