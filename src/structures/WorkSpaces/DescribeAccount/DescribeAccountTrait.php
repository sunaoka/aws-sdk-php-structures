<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeAccount;

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
