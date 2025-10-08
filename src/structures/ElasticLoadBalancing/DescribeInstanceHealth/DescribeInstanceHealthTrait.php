<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeInstanceHealth;

trait DescribeInstanceHealthTrait
{
    /**
     * @param DescribeInstanceHealthRequest $args
     * @return DescribeInstanceHealthResponse
     */
    public function describeInstanceHealth(DescribeInstanceHealthRequest $args)
    {
        $result = parent::describeInstanceHealth($args->toArray());
        return new DescribeInstanceHealthResponse($result->toArray());
    }
}
