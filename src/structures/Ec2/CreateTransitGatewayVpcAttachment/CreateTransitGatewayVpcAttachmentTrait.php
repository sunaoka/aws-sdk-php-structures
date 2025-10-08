<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayVpcAttachment;

trait CreateTransitGatewayVpcAttachmentTrait
{
    /**
     * @param CreateTransitGatewayVpcAttachmentRequest $args
     * @return CreateTransitGatewayVpcAttachmentResponse
     */
    public function createTransitGatewayVpcAttachment(CreateTransitGatewayVpcAttachmentRequest $args)
    {
        $result = parent::createTransitGatewayVpcAttachment($args->toArray());
        return new CreateTransitGatewayVpcAttachmentResponse($result->toArray());
    }
}
