<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPeeringAttachment;

trait CreateTransitGatewayPeeringAttachmentTrait
{
    /**
     * @param CreateTransitGatewayPeeringAttachmentRequest $args
     * @return CreateTransitGatewayPeeringAttachmentResponse
     */
    public function createTransitGatewayPeeringAttachment(CreateTransitGatewayPeeringAttachmentRequest $args)
    {
        $result = parent::createTransitGatewayPeeringAttachment($args->toArray());
        return new CreateTransitGatewayPeeringAttachmentResponse($result->toArray());
    }
}
