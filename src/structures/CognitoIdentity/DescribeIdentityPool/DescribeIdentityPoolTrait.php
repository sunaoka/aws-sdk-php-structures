<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\DescribeIdentityPool;

trait DescribeIdentityPoolTrait
{
    /**
     * @param DescribeIdentityPoolRequest $args
     * @return DescribeIdentityPoolResponse
     */
    public function describeIdentityPool(DescribeIdentityPoolRequest $args)
    {
        $result = parent::describeIdentityPool($args->toArray());
        return new DescribeIdentityPoolResponse($result->toArray());
    }
}
