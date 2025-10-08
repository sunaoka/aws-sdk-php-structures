<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeTransaction;

trait DescribeTransactionTrait
{
    /**
     * @param DescribeTransactionRequest $args
     * @return DescribeTransactionResponse
     */
    public function describeTransaction(DescribeTransactionRequest $args)
    {
        $result = parent::describeTransaction($args->toArray());
        return new DescribeTransactionResponse($result->toArray());
    }
}
