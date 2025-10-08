<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeInstance;

trait DescribeInstanceTrait
{
    /**
     * @param DescribeInstanceRequest $args
     * @return DescribeInstanceResponse
     */
    public function describeInstance(DescribeInstanceRequest $args)
    {
        $result = parent::describeInstance($args->toArray());
        return new DescribeInstanceResponse($result->toArray());
    }
}
