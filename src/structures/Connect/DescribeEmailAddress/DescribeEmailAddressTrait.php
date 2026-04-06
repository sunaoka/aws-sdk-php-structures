<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEmailAddress;

trait DescribeEmailAddressTrait
{
    /**
     * @param DescribeEmailAddressRequest $args
     * @return DescribeEmailAddressResponse
     */
    public function describeEmailAddress(DescribeEmailAddressRequest $args)
    {
        $result = parent::describeEmailAddress($args->toArray());
        return new DescribeEmailAddressResponse($result->toArray());
    }
}
