<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateDirectConnectGatewayAttachment;

trait UpdateDirectConnectGatewayAttachmentTrait
{
    /**
     * @param UpdateDirectConnectGatewayAttachmentRequest $args
     * @return UpdateDirectConnectGatewayAttachmentResponse
     */
    public function updateDirectConnectGatewayAttachment(UpdateDirectConnectGatewayAttachmentRequest $args)
    {
        $result = parent::updateDirectConnectGatewayAttachment($args->toArray());
        return new UpdateDirectConnectGatewayAttachmentResponse($result->toArray());
    }
}
