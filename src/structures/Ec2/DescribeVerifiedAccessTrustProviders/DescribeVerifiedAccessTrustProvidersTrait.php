<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessTrustProviders;

trait DescribeVerifiedAccessTrustProvidersTrait
{
    /**
     * @param DescribeVerifiedAccessTrustProvidersRequest $args
     * @return DescribeVerifiedAccessTrustProvidersResponse
     */
    public function describeVerifiedAccessTrustProviders(DescribeVerifiedAccessTrustProvidersRequest $args)
    {
        $result = parent::describeVerifiedAccessTrustProviders($args->toArray());
        return new DescribeVerifiedAccessTrustProvidersResponse($result->toArray());
    }
}
