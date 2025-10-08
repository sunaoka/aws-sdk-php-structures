<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxies;

trait DescribeDBProxiesTrait
{
    /**
     * @param DescribeDBProxiesRequest $args
     * @return DescribeDBProxiesResponse
     */
    public function describeDBProxies(DescribeDBProxiesRequest $args)
    {
        $result = parent::describeDBProxies($args->toArray());
        return new DescribeDBProxiesResponse($result->toArray());
    }
}
