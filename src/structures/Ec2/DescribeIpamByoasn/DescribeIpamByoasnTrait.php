<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamByoasn;

trait DescribeIpamByoasnTrait
{
    /**
     * @param DescribeIpamByoasnRequest $args
     * @return DescribeIpamByoasnResponse
     */
    public function describeIpamByoasn(DescribeIpamByoasnRequest $args)
    {
        $result = parent::describeIpamByoasn($args->toArray());
        return new DescribeIpamByoasnResponse($result->toArray());
    }
}
