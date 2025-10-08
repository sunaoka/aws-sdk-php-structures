<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeExclusions;

trait DescribeExclusionsTrait
{
    /**
     * @param DescribeExclusionsRequest $args
     * @return DescribeExclusionsResponse
     */
    public function describeExclusions(DescribeExclusionsRequest $args)
    {
        $result = parent::describeExclusions($args->toArray());
        return new DescribeExclusionsResponse($result->toArray());
    }
}
