<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StartSNOMEDCTInferenceJob;

trait StartSNOMEDCTInferenceJobTrait
{
    /**
     * @param StartSNOMEDCTInferenceJobRequest $args
     * @return StartSNOMEDCTInferenceJobResponse
     */
    public function startSNOMEDCTInferenceJob(StartSNOMEDCTInferenceJobRequest $args)
    {
        $result = parent::startSNOMEDCTInferenceJob($args->toArray());
        return new StartSNOMEDCTInferenceJobResponse($result->toArray());
    }
}
