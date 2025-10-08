<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeADAssessment;

trait DescribeADAssessmentTrait
{
    /**
     * @param DescribeADAssessmentRequest $args
     * @return DescribeADAssessmentResponse
     */
    public function describeADAssessment(DescribeADAssessmentRequest $args)
    {
        $result = parent::describeADAssessment($args->toArray());
        return new DescribeADAssessmentResponse($result->toArray());
    }
}
