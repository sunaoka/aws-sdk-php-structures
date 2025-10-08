<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentRuns;

trait DescribeAssessmentRunsTrait
{
    /**
     * @param DescribeAssessmentRunsRequest $args
     * @return DescribeAssessmentRunsResponse
     */
    public function describeAssessmentRuns(DescribeAssessmentRunsRequest $args)
    {
        $result = parent::describeAssessmentRuns($args->toArray());
        return new DescribeAssessmentRunsResponse($result->toArray());
    }
}
