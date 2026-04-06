<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnConcentrators;

trait DescribeVpnConcentratorsTrait
{
    /**
     * @param DescribeVpnConcentratorsRequest $args
     * @return DescribeVpnConcentratorsResponse
     */
    public function describeVpnConcentrators(DescribeVpnConcentratorsRequest $args)
    {
        $result = parent::describeVpnConcentrators($args->toArray());
        return new DescribeVpnConcentratorsResponse($result->toArray());
    }
}
