<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StartRxNormInferenceJob;

trait StartRxNormInferenceJobTrait
{
    /**
     * @param StartRxNormInferenceJobRequest $args
     * @return StartRxNormInferenceJobResponse
     */
    public function startRxNormInferenceJob(StartRxNormInferenceJobRequest $args)
    {
        $result = parent::startRxNormInferenceJob($args->toArray());
        return new StartRxNormInferenceJobResponse($result->toArray());
    }
}
