<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool;

trait DescribeUserPoolTrait
{
    /**
     * @param DescribeUserPoolRequest $args
     * @return DescribeUserPoolResponse
     */
    public function describeUserPool(DescribeUserPoolRequest $args)
    {
        $result = parent::describeUserPool($args->toArray());
        return new DescribeUserPoolResponse($result->toArray());
    }
}
