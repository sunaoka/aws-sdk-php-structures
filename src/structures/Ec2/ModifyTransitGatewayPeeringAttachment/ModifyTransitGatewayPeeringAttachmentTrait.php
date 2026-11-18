<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayPeeringAttachment;

trait ModifyTransitGatewayPeeringAttachmentTrait
{
    /**
     * @param ModifyTransitGatewayPeeringAttachmentRequest $args
     * @return ModifyTransitGatewayPeeringAttachmentResponse
     */
    public function modifyTransitGatewayPeeringAttachment(ModifyTransitGatewayPeeringAttachmentRequest $args)
    {
        $result = parent::modifyTransitGatewayPeeringAttachment($args->toArray());
        return new ModifyTransitGatewayPeeringAttachmentResponse($result->toArray());
    }
}
