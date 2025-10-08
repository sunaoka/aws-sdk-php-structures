<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayRouteTableAttachment;

trait GetTransitGatewayRouteTableAttachmentTrait
{
    /**
     * @param GetTransitGatewayRouteTableAttachmentRequest $args
     * @return GetTransitGatewayRouteTableAttachmentResponse
     */
    public function getTransitGatewayRouteTableAttachment(GetTransitGatewayRouteTableAttachmentRequest $args)
    {
        $result = parent::getTransitGatewayRouteTableAttachment($args->toArray());
        return new GetTransitGatewayRouteTableAttachmentResponse($result->toArray());
    }
}
