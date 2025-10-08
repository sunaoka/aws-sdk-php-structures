<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectTransitGatewayPeeringAttachment;

trait RejectTransitGatewayPeeringAttachmentTrait
{
    /**
     * @param RejectTransitGatewayPeeringAttachmentRequest $args
     * @return RejectTransitGatewayPeeringAttachmentResponse
     */
    public function rejectTransitGatewayPeeringAttachment(RejectTransitGatewayPeeringAttachmentRequest $args)
    {
        $result = parent::rejectTransitGatewayPeeringAttachment($args->toArray());
        return new RejectTransitGatewayPeeringAttachmentResponse($result->toArray());
    }
}
