<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddressesAttribute;

trait DescribeAddressesAttributeTrait
{
    /**
     * @param DescribeAddressesAttributeRequest $args
     * @return DescribeAddressesAttributeResponse
     */
    public function describeAddressesAttribute(DescribeAddressesAttributeRequest $args)
    {
        $result = parent::describeAddressesAttribute($args->toArray());
        return new DescribeAddressesAttributeResponse($result->toArray());
    }
}
