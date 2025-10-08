<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayVpcAttachment;

trait DeleteTransitGatewayVpcAttachmentTrait
{
    /**
     * @param DeleteTransitGatewayVpcAttachmentRequest $args
     * @return DeleteTransitGatewayVpcAttachmentResponse
     */
    public function deleteTransitGatewayVpcAttachment(DeleteTransitGatewayVpcAttachmentRequest $args)
    {
        $result = parent::deleteTransitGatewayVpcAttachment($args->toArray());
        return new DeleteTransitGatewayVpcAttachmentResponse($result->toArray());
    }
}
