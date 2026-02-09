<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecondaryInterfaces;

trait DescribeSecondaryInterfacesTrait
{
    /**
     * @param DescribeSecondaryInterfacesRequest $args
     * @return DescribeSecondaryInterfacesResponse
     */
    public function describeSecondaryInterfaces(DescribeSecondaryInterfacesRequest $args)
    {
        $result = parent::describeSecondaryInterfaces($args->toArray());
        return new DescribeSecondaryInterfacesResponse($result->toArray());
    }
}
