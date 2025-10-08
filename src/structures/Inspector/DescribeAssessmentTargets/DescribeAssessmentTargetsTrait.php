<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentTargets;

trait DescribeAssessmentTargetsTrait
{
    /**
     * @param DescribeAssessmentTargetsRequest $args
     * @return DescribeAssessmentTargetsResponse
     */
    public function describeAssessmentTargets(DescribeAssessmentTargetsRequest $args)
    {
        $result = parent::describeAssessmentTargets($args->toArray());
        return new DescribeAssessmentTargetsResponse($result->toArray());
    }
}
