<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers;

trait DescribeLoadBalancersTrait
{
    /**
     * @param DescribeLoadBalancersRequest $args
     * @return DescribeLoadBalancersResponse
     */
    public function describeLoadBalancers(DescribeLoadBalancersRequest $args)
    {
        $result = parent::describeLoadBalancers($args->toArray());
        return new DescribeLoadBalancersResponse($result->toArray());
    }
}
