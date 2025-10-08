<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppAssessment;

trait DescribeAppAssessmentTrait
{
    /**
     * @param DescribeAppAssessmentRequest $args
     * @return DescribeAppAssessmentResponse
     */
    public function describeAppAssessment(DescribeAppAssessmentRequest $args)
    {
        $result = parent::describeAppAssessment($args->toArray());
        return new DescribeAppAssessmentResponse($result->toArray());
    }
}
