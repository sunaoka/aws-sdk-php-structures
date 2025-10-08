<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\DescribeIdentity;

trait DescribeIdentityTrait
{
    /**
     * @param DescribeIdentityRequest $args
     * @return DescribeIdentityResponse
     */
    public function describeIdentity(DescribeIdentityRequest $args)
    {
        $result = parent::describeIdentity($args->toArray());
        return new DescribeIdentityResponse($result->toArray());
    }
}
