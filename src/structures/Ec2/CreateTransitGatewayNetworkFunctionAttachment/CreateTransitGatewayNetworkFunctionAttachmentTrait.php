<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayNetworkFunctionAttachment;

trait CreateTransitGatewayNetworkFunctionAttachmentTrait
{
    /**
     * @param CreateTransitGatewayNetworkFunctionAttachmentRequest $args
     * @return CreateTransitGatewayNetworkFunctionAttachmentResponse
     */
    public function createTransitGatewayNetworkFunctionAttachment(CreateTransitGatewayNetworkFunctionAttachmentRequest $args)
    {
        $result = parent::createTransitGatewayNetworkFunctionAttachment($args->toArray());
        return new CreateTransitGatewayNetworkFunctionAttachmentResponse($result->toArray());
    }
}
