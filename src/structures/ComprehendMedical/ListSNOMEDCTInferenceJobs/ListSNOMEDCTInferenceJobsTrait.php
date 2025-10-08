<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\ListSNOMEDCTInferenceJobs;

trait ListSNOMEDCTInferenceJobsTrait
{
    /**
     * @param ListSNOMEDCTInferenceJobsRequest $args
     * @return ListSNOMEDCTInferenceJobsResponse
     */
    public function listSNOMEDCTInferenceJobs(ListSNOMEDCTInferenceJobsRequest $args)
    {
        $result = parent::listSNOMEDCTInferenceJobs($args->toArray());
        return new ListSNOMEDCTInferenceJobsResponse($result->toArray());
    }
}
