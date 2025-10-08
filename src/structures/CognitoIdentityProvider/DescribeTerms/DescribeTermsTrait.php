<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeTerms;

trait DescribeTermsTrait
{
    /**
     * @param DescribeTermsRequest $args
     * @return DescribeTermsResponse
     */
    public function describeTerms(DescribeTermsRequest $args)
    {
        $result = parent::describeTerms($args->toArray());
        return new DescribeTermsResponse($result->toArray());
    }
}
