<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateDirectConnectGatewayAttachment;

trait CreateDirectConnectGatewayAttachmentTrait
{
    /**
     * @param CreateDirectConnectGatewayAttachmentRequest $args
     * @return CreateDirectConnectGatewayAttachmentResponse
     */
    public function createDirectConnectGatewayAttachment(CreateDirectConnectGatewayAttachmentRequest $args)
    {
        $result = parent::createDirectConnectGatewayAttachment($args->toArray());
        return new CreateDirectConnectGatewayAttachmentResponse($result->toArray());
    }
}
