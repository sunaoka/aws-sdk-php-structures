<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StopSNOMEDCTInferenceJob;

trait StopSNOMEDCTInferenceJobTrait
{
    /**
     * @param StopSNOMEDCTInferenceJobRequest $args
     * @return StopSNOMEDCTInferenceJobResponse
     */
    public function stopSNOMEDCTInferenceJob(StopSNOMEDCTInferenceJobRequest $args)
    {
        $result = parent::stopSNOMEDCTInferenceJob($args->toArray());
        return new StopSNOMEDCTInferenceJobResponse($result->toArray());
    }
}
