<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectTransitGatewayClientVpnAttachment;

trait RejectTransitGatewayClientVpnAttachmentTrait
{
    /**
     * @param RejectTransitGatewayClientVpnAttachmentRequest $args
     * @return RejectTransitGatewayClientVpnAttachmentResponse
     */
    public function rejectTransitGatewayClientVpnAttachment(RejectTransitGatewayClientVpnAttachmentRequest $args)
    {
        $result = parent::rejectTransitGatewayClientVpnAttachment($args->toArray());
        return new RejectTransitGatewayClientVpnAttachmentResponse($result->toArray());
    }
}
