<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterTransitGatewayMulticastGroupSources;

trait DeregisterTransitGatewayMulticastGroupSourcesTrait
{
    /**
     * @param DeregisterTransitGatewayMulticastGroupSourcesRequest $args
     * @return DeregisterTransitGatewayMulticastGroupSourcesResponse
     */
    public function deregisterTransitGatewayMulticastGroupSources(DeregisterTransitGatewayMulticastGroupSourcesRequest $args)
    {
        $result = parent::deregisterTransitGatewayMulticastGroupSources($args->toArray());
        return new DeregisterTransitGatewayMulticastGroupSourcesResponse($result->toArray());
    }
}
