<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DescribeSNOMEDCTInferenceJob;

trait DescribeSNOMEDCTInferenceJobTrait
{
    /**
     * @param DescribeSNOMEDCTInferenceJobRequest $args
     * @return DescribeSNOMEDCTInferenceJobResponse
     */
    public function describeSNOMEDCTInferenceJob(DescribeSNOMEDCTInferenceJobRequest $args)
    {
        $result = parent::describeSNOMEDCTInferenceJob($args->toArray());
        return new DescribeSNOMEDCTInferenceJobResponse($result->toArray());
    }
}
