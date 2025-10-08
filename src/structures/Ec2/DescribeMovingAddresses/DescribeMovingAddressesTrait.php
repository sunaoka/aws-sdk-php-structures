<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMovingAddresses;

trait DescribeMovingAddressesTrait
{
    /**
     * @param DescribeMovingAddressesRequest $args
     * @return DescribeMovingAddressesResponse
     */
    public function describeMovingAddresses(DescribeMovingAddressesRequest $args)
    {
        $result = parent::describeMovingAddresses($args->toArray());
        return new DescribeMovingAddressesResponse($result->toArray());
    }
}
