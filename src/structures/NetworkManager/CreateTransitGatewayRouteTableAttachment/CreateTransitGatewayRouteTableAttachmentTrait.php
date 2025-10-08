<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateTransitGatewayRouteTableAttachment;

trait CreateTransitGatewayRouteTableAttachmentTrait
{
    /**
     * @param CreateTransitGatewayRouteTableAttachmentRequest $args
     * @return CreateTransitGatewayRouteTableAttachmentResponse
     */
    public function createTransitGatewayRouteTableAttachment(CreateTransitGatewayRouteTableAttachmentRequest $args)
    {
        $result = parent::createTransitGatewayRouteTableAttachment($args->toArray());
        return new CreateTransitGatewayRouteTableAttachmentResponse($result->toArray());
    }
}
