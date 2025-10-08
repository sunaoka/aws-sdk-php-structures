<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StartICD10CMInferenceJob;

trait StartICD10CMInferenceJobTrait
{
    /**
     * @param StartICD10CMInferenceJobRequest $args
     * @return StartICD10CMInferenceJobResponse
     */
    public function startICD10CMInferenceJob(StartICD10CMInferenceJobRequest $args)
    {
        $result = parent::startICD10CMInferenceJob($args->toArray());
        return new StartICD10CMInferenceJobResponse($result->toArray());
    }
}
