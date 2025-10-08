<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectTransitGatewayVpcAttachment;

trait RejectTransitGatewayVpcAttachmentTrait
{
    /**
     * @param RejectTransitGatewayVpcAttachmentRequest $args
     * @return RejectTransitGatewayVpcAttachmentResponse
     */
    public function rejectTransitGatewayVpcAttachment(RejectTransitGatewayVpcAttachmentRequest $args)
    {
        $result = parent::rejectTransitGatewayVpcAttachment($args->toArray());
        return new RejectTransitGatewayVpcAttachmentResponse($result->toArray());
    }
}
