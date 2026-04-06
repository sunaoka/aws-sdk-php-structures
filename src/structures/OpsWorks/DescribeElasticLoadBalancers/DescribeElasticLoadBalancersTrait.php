<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeElasticLoadBalancers;

trait DescribeElasticLoadBalancersTrait
{
    /**
     * @param DescribeElasticLoadBalancersRequest $args
     * @return DescribeElasticLoadBalancersResponse
     */
    public function describeElasticLoadBalancers(DescribeElasticLoadBalancersRequest $args)
    {
        $result = parent::describeElasticLoadBalancers($args->toArray());
        return new DescribeElasticLoadBalancersResponse($result->toArray());
    }
}
