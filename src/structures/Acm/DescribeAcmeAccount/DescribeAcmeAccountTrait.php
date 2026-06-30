<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeAccount;

trait DescribeAcmeAccountTrait
{
    /**
     * @param DescribeAcmeAccountRequest $args
     * @return DescribeAcmeAccountResponse
     */
    public function describeAcmeAccount(DescribeAcmeAccountRequest $args)
    {
        $result = parent::describeAcmeAccount($args->toArray());
        return new DescribeAcmeAccountResponse($result->toArray());
    }
}
