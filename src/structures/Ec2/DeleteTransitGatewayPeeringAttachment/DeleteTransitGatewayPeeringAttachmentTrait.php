<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayPeeringAttachment;

trait DeleteTransitGatewayPeeringAttachmentTrait
{
    /**
     * @param DeleteTransitGatewayPeeringAttachmentRequest $args
     * @return DeleteTransitGatewayPeeringAttachmentResponse
     */
    public function deleteTransitGatewayPeeringAttachment(DeleteTransitGatewayPeeringAttachmentRequest $args)
    {
        $result = parent::deleteTransitGatewayPeeringAttachment($args->toArray());
        return new DeleteTransitGatewayPeeringAttachmentResponse($result->toArray());
    }
}
