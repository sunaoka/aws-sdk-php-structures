<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\RejectNetworkFirewallTransitGatewayAttachment;

trait RejectNetworkFirewallTransitGatewayAttachmentTrait
{
    /**
     * @param RejectNetworkFirewallTransitGatewayAttachmentRequest $args
     * @return RejectNetworkFirewallTransitGatewayAttachmentResponse
     */
    public function rejectNetworkFirewallTransitGatewayAttachment(RejectNetworkFirewallTransitGatewayAttachmentRequest $args)
    {
        $result = parent::rejectNetworkFirewallTransitGatewayAttachment($args->toArray());
        return new RejectNetworkFirewallTransitGatewayAttachmentResponse($result->toArray());
    }
}
