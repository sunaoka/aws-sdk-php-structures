<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayMulticastDomains;

trait DescribeTransitGatewayMulticastDomainsTrait
{
    /**
     * @param DescribeTransitGatewayMulticastDomainsRequest $args
     * @return DescribeTransitGatewayMulticastDomainsResponse
     */
    public function describeTransitGatewayMulticastDomains(DescribeTransitGatewayMulticastDomainsRequest $args)
    {
        $result = parent::describeTransitGatewayMulticastDomains($args->toArray());
        return new DescribeTransitGatewayMulticastDomainsResponse($result->toArray());
    }
}
