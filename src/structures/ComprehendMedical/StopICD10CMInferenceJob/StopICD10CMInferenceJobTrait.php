<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StopICD10CMInferenceJob;

trait StopICD10CMInferenceJobTrait
{
    /**
     * @param StopICD10CMInferenceJobRequest $args
     * @return StopICD10CMInferenceJobResponse
     */
    public function stopICD10CMInferenceJob(StopICD10CMInferenceJobRequest $args)
    {
        $result = parent::stopICD10CMInferenceJob($args->toArray());
        return new StopICD10CMInferenceJobResponse($result->toArray());
    }
}
