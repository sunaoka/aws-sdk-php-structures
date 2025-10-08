<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeAccount;

trait DescribeAccountTrait
{
    /**
     * @param DescribeAccountRequest $args
     * @return DescribeAccountResponse
     */
    public function describeAccount(DescribeAccountRequest $args)
    {
        $result = parent::describeAccount($args->toArray());
        return new DescribeAccountResponse($result->toArray());
    }
}
