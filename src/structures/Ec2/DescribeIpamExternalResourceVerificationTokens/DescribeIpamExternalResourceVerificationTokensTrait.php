<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamExternalResourceVerificationTokens;

trait DescribeIpamExternalResourceVerificationTokensTrait
{
    /**
     * @param DescribeIpamExternalResourceVerificationTokensRequest $args
     * @return DescribeIpamExternalResourceVerificationTokensResponse
     */
    public function describeIpamExternalResourceVerificationTokens(
        DescribeIpamExternalResourceVerificationTokensRequest $args,
    ) {
        $result = parent::describeIpamExternalResourceVerificationTokens($args->toArray());
        return new DescribeIpamExternalResourceVerificationTokensResponse($result->toArray());
    }
}
