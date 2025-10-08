<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteNetworkFirewallTransitGatewayAttachment;

trait DeleteNetworkFirewallTransitGatewayAttachmentTrait
{
    /**
     * @param DeleteNetworkFirewallTransitGatewayAttachmentRequest $args
     * @return DeleteNetworkFirewallTransitGatewayAttachmentResponse
     */
    public function deleteNetworkFirewallTransitGatewayAttachment(
        DeleteNetworkFirewallTransitGatewayAttachmentRequest $args,
    ) {
        $result = parent::deleteNetworkFirewallTransitGatewayAttachment($args->toArray());
        return new DeleteNetworkFirewallTransitGatewayAttachmentResponse($result->toArray());
    }
}
