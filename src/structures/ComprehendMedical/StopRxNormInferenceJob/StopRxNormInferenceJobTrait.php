<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StopRxNormInferenceJob;

trait StopRxNormInferenceJobTrait
{
    /**
     * @param StopRxNormInferenceJobRequest $args
     * @return StopRxNormInferenceJobResponse
     */
    public function stopRxNormInferenceJob(StopRxNormInferenceJobRequest $args)
    {
        $result = parent::stopRxNormInferenceJob($args->toArray());
        return new StopRxNormInferenceJobResponse($result->toArray());
    }
}
