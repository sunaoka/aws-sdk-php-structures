<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptTransitGatewayClientVpnAttachment;

trait AcceptTransitGatewayClientVpnAttachmentTrait
{
    /**
     * @param AcceptTransitGatewayClientVpnAttachmentRequest $args
     * @return AcceptTransitGatewayClientVpnAttachmentResponse
     */
    public function acceptTransitGatewayClientVpnAttachment(AcceptTransitGatewayClientVpnAttachmentRequest $args)
    {
        $result = parent::acceptTransitGatewayClientVpnAttachment($args->toArray());
        return new AcceptTransitGatewayClientVpnAttachmentResponse($result->toArray());
    }
}
