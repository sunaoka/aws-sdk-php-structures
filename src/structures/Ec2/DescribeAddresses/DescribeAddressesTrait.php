<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddresses;

trait DescribeAddressesTrait
{
    /**
     * @param DescribeAddressesRequest $args
     * @return DescribeAddressesResponse
     */
    public function describeAddresses(DescribeAddressesRequest $args)
    {
        $result = parent::describeAddresses($args->toArray());
        return new DescribeAddressesResponse($result->toArray());
    }
}
