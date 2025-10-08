<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DescribeRxNormInferenceJob;

trait DescribeRxNormInferenceJobTrait
{
    /**
     * @param DescribeRxNormInferenceJobRequest $args
     * @return DescribeRxNormInferenceJobResponse
     */
    public function describeRxNormInferenceJob(DescribeRxNormInferenceJobRequest $args)
    {
        $result = parent::describeRxNormInferenceJob($args->toArray());
        return new DescribeRxNormInferenceJobResponse($result->toArray());
    }
}
