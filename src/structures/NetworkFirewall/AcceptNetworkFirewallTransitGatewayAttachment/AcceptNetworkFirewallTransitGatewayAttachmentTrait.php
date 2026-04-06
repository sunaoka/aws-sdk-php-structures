<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AcceptNetworkFirewallTransitGatewayAttachment;

trait AcceptNetworkFirewallTransitGatewayAttachmentTrait
{
    /**
     * @param AcceptNetworkFirewallTransitGatewayAttachmentRequest $args
     * @return AcceptNetworkFirewallTransitGatewayAttachmentResponse
     */
    public function acceptNetworkFirewallTransitGatewayAttachment(AcceptNetworkFirewallTransitGatewayAttachmentRequest $args)
    {
        $result = parent::acceptNetworkFirewallTransitGatewayAttachment($args->toArray());
        return new AcceptNetworkFirewallTransitGatewayAttachmentResponse($result->toArray());
    }
}
