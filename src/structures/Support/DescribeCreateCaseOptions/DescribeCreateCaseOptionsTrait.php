<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCreateCaseOptions;

trait DescribeCreateCaseOptionsTrait
{
    /**
     * @param DescribeCreateCaseOptionsRequest $args
     * @return DescribeCreateCaseOptionsResponse
     */
    public function describeCreateCaseOptions(DescribeCreateCaseOptionsRequest $args)
    {
        $result = parent::describeCreateCaseOptions($args->toArray());
        return new DescribeCreateCaseOptionsResponse($result->toArray());
    }
}
