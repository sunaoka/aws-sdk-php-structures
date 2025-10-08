<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DescribeICD10CMInferenceJob;

trait DescribeICD10CMInferenceJobTrait
{
    /**
     * @param DescribeICD10CMInferenceJobRequest $args
     * @return DescribeICD10CMInferenceJobResponse
     */
    public function describeICD10CMInferenceJob(DescribeICD10CMInferenceJobRequest $args)
    {
        $result = parent::describeICD10CMInferenceJob($args->toArray());
        return new DescribeICD10CMInferenceJobResponse($result->toArray());
    }
}
