<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptTransitGatewayPeeringAttachment;

trait AcceptTransitGatewayPeeringAttachmentTrait
{
    /**
     * @param AcceptTransitGatewayPeeringAttachmentRequest $args
     * @return AcceptTransitGatewayPeeringAttachmentResponse
     */
    public function acceptTransitGatewayPeeringAttachment(AcceptTransitGatewayPeeringAttachmentRequest $args)
    {
        $result = parent::acceptTransitGatewayPeeringAttachment($args->toArray());
        return new AcceptTransitGatewayPeeringAttachmentResponse($result->toArray());
    }
}
