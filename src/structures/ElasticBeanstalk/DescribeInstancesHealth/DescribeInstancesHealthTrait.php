<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth;

trait DescribeInstancesHealthTrait
{
    /**
     * @param DescribeInstancesHealthRequest $args
     * @return DescribeInstancesHealthResponse
     */
    public function describeInstancesHealth(DescribeInstancesHealthRequest $args)
    {
        $result = parent::describeInstancesHealth($args->toArray());
        return new DescribeInstancesHealthResponse($result->toArray());
    }
}
