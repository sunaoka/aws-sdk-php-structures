<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterTransitGatewayMulticastGroupSources;

trait RegisterTransitGatewayMulticastGroupSourcesTrait
{
    /**
     * @param RegisterTransitGatewayMulticastGroupSourcesRequest $args
     * @return RegisterTransitGatewayMulticastGroupSourcesResponse
     */
    public function registerTransitGatewayMulticastGroupSources(RegisterTransitGatewayMulticastGroupSourcesRequest $args)
    {
        $result = parent::registerTransitGatewayMulticastGroupSources($args->toArray());
        return new RegisterTransitGatewayMulticastGroupSourcesResponse($result->toArray());
    }
}
