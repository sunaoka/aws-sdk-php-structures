<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaceAttribute;

trait DescribeNetworkInterfaceAttributeTrait
{
    /**
     * @param DescribeNetworkInterfaceAttributeRequest $args
     * @return DescribeNetworkInterfaceAttributeResponse
     */
    public function describeNetworkInterfaceAttribute(DescribeNetworkInterfaceAttributeRequest $args)
    {
        $result = parent::describeNetworkInterfaceAttribute($args->toArray());
        return new DescribeNetworkInterfaceAttributeResponse($result->toArray());
    }
}
