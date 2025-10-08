<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteTables;

trait DescribeRouteTablesTrait
{
    /**
     * @param DescribeRouteTablesRequest $args
     * @return DescribeRouteTablesResponse
     */
    public function describeRouteTables(DescribeRouteTablesRequest $args)
    {
        $result = parent::describeRouteTables($args->toArray());
        return new DescribeRouteTablesResponse($result->toArray());
    }
}
