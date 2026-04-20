<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayClientVpnAttachment;

trait DeleteTransitGatewayClientVpnAttachmentTrait
{
    /**
     * @param DeleteTransitGatewayClientVpnAttachmentRequest $args
     * @return DeleteTransitGatewayClientVpnAttachmentResponse
     */
    public function deleteTransitGatewayClientVpnAttachment(DeleteTransitGatewayClientVpnAttachmentRequest $args)
    {
        $result = parent::deleteTransitGatewayClientVpnAttachment($args->toArray());
        return new DeleteTransitGatewayClientVpnAttachmentResponse($result->toArray());
    }
}
