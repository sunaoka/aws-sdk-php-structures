<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPoolDomain;

trait DescribeUserPoolDomainTrait
{
    /**
     * @param DescribeUserPoolDomainRequest $args
     * @return DescribeUserPoolDomainResponse
     */
    public function describeUserPoolDomain(DescribeUserPoolDomainRequest $args)
    {
        $result = parent::describeUserPoolDomain($args->toArray());
        return new DescribeUserPoolDomainResponse($result->toArray());
    }
}
