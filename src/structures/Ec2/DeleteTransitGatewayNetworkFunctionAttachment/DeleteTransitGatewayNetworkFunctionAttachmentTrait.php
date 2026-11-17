<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayNetworkFunctionAttachment;

trait DeleteTransitGatewayNetworkFunctionAttachmentTrait
{
    /**
     * @param DeleteTransitGatewayNetworkFunctionAttachmentRequest $args
     * @return DeleteTransitGatewayNetworkFunctionAttachmentResponse
     */
    public function deleteTransitGatewayNetworkFunctionAttachment(DeleteTransitGatewayNetworkFunctionAttachmentRequest $args)
    {
        $result = parent::deleteTransitGatewayNetworkFunctionAttachment($args->toArray());
        return new DeleteTransitGatewayNetworkFunctionAttachmentResponse($result->toArray());
    }
}
