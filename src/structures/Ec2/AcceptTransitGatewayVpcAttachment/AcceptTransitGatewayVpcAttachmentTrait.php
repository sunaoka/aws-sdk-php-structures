<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptTransitGatewayVpcAttachment;

trait AcceptTransitGatewayVpcAttachmentTrait
{
    /**
     * @param AcceptTransitGatewayVpcAttachmentRequest $args
     * @return AcceptTransitGatewayVpcAttachmentResponse
     */
    public function acceptTransitGatewayVpcAttachment(AcceptTransitGatewayVpcAttachmentRequest $args)
    {
        $result = parent::acceptTransitGatewayVpcAttachment($args->toArray());
        return new AcceptTransitGatewayVpcAttachmentResponse($result->toArray());
    }
}
