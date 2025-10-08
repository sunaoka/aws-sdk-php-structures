<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeAddress;

trait DescribeAddressTrait
{
    /**
     * @param DescribeAddressRequest $args
     * @return DescribeAddressResponse
     */
    public function describeAddress(DescribeAddressRequest $args)
    {
        $result = parent::describeAddress($args->toArray());
        return new DescribeAddressResponse($result->toArray());
    }
}
