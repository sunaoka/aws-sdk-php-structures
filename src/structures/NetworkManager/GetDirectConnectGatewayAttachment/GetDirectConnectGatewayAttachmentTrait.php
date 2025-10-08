<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetDirectConnectGatewayAttachment;

trait GetDirectConnectGatewayAttachmentTrait
{
    /**
     * @param GetDirectConnectGatewayAttachmentRequest $args
     * @return GetDirectConnectGatewayAttachmentResponse
     */
    public function getDirectConnectGatewayAttachment(GetDirectConnectGatewayAttachmentRequest $args)
    {
        $result = parent::getDirectConnectGatewayAttachment($args->toArray());
        return new GetDirectConnectGatewayAttachmentResponse($result->toArray());
    }
}
