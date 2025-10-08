<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayVpcAttachment;

trait ModifyTransitGatewayVpcAttachmentTrait
{
    /**
     * @param ModifyTransitGatewayVpcAttachmentRequest $args
     * @return ModifyTransitGatewayVpcAttachmentResponse
     */
    public function modifyTransitGatewayVpcAttachment(ModifyTransitGatewayVpcAttachmentRequest $args)
    {
        $result = parent::modifyTransitGatewayVpcAttachment($args->toArray());
        return new ModifyTransitGatewayVpcAttachmentResponse($result->toArray());
    }
}
