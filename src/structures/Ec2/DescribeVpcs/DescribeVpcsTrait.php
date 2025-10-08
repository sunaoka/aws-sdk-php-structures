<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcs;

trait DescribeVpcsTrait
{
    /**
     * @param DescribeVpcsRequest $args
     * @return DescribeVpcsResponse
     */
    public function describeVpcs(DescribeVpcsRequest $args)
    {
        $result = parent::describeVpcs($args->toArray());
        return new DescribeVpcsResponse($result->toArray());
    }
}
