<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAccountLimits;

trait DescribeAccountLimitsTrait
{
    /**
     * @return DescribeAccountLimitsResponse
     */
    public function describeAccountLimits()
    {
        $result = parent::describeAccountLimits();
        return new DescribeAccountLimitsResponse($result->toArray());
    }
}
