<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeElasticIps;

trait DescribeElasticIpsTrait
{
    /**
     * @param DescribeElasticIpsRequest $args
     * @return DescribeElasticIpsResponse
     */
    public function describeElasticIps(DescribeElasticIpsRequest $args)
    {
        $result = parent::describeElasticIps($args->toArray());
        return new DescribeElasticIpsResponse($result->toArray());
    }
}
