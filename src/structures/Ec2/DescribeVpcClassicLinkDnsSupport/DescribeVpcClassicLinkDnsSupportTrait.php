<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcClassicLinkDnsSupport;

trait DescribeVpcClassicLinkDnsSupportTrait
{
    /**
     * @param DescribeVpcClassicLinkDnsSupportRequest $args
     * @return DescribeVpcClassicLinkDnsSupportResponse
     */
    public function describeVpcClassicLinkDnsSupport(DescribeVpcClassicLinkDnsSupportRequest $args)
    {
        $result = parent::describeVpcClassicLinkDnsSupport($args->toArray());
        return new DescribeVpcClassicLinkDnsSupportResponse($result->toArray());
    }
}
