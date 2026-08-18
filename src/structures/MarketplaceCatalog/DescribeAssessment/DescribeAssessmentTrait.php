<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment;

trait DescribeAssessmentTrait
{
    /**
     * @param DescribeAssessmentRequest $args
     * @return DescribeAssessmentResponse
     */
    public function describeAssessment(DescribeAssessmentRequest $args)
    {
        $result = parent::describeAssessment($args->toArray());
        return new DescribeAssessmentResponse($result->toArray());
    }
}
