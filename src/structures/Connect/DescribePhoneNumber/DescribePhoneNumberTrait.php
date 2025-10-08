<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePhoneNumber;

trait DescribePhoneNumberTrait
{
    /**
     * @param DescribePhoneNumberRequest $args
     * @return DescribePhoneNumberResponse
     */
    public function describePhoneNumber(DescribePhoneNumberRequest $args)
    {
        $result = parent::describePhoneNumber($args->toArray());
        return new DescribePhoneNumberResponse($result->toArray());
    }
}
