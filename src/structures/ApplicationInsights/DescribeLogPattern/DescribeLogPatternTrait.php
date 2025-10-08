<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeLogPattern;

trait DescribeLogPatternTrait
{
    /**
     * @param DescribeLogPatternRequest $args
     * @return DescribeLogPatternResponse
     */
    public function describeLogPattern(DescribeLogPatternRequest $args)
    {
        $result = parent::describeLogPattern($args->toArray());
        return new DescribeLogPatternResponse($result->toArray());
    }
}
