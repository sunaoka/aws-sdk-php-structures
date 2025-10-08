<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts;

trait DescribeHostsTrait
{
    /**
     * @param DescribeHostsRequest $args
     * @return DescribeHostsResponse
     */
    public function describeHosts(DescribeHostsRequest $args)
    {
        $result = parent::describeHosts($args->toArray());
        return new DescribeHostsResponse($result->toArray());
    }
}
