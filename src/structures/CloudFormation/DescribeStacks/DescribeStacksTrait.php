<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStacks;

trait DescribeStacksTrait
{
    /**
     * @param DescribeStacksRequest $args
     * @return DescribeStacksResponse
     */
    public function describeStacks(DescribeStacksRequest $args)
    {
        $result = parent::describeStacks($args->toArray());
        return new DescribeStacksResponse($result->toArray());
    }
}
