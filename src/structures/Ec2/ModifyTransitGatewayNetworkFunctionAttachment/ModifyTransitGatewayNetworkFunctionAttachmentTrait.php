<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayNetworkFunctionAttachment;

trait ModifyTransitGatewayNetworkFunctionAttachmentTrait
{
    /**
     * @param ModifyTransitGatewayNetworkFunctionAttachmentRequest $args
     * @return ModifyTransitGatewayNetworkFunctionAttachmentResponse
     */
    public function modifyTransitGatewayNetworkFunctionAttachment(ModifyTransitGatewayNetworkFunctionAttachmentRequest $args)
    {
        $result = parent::modifyTransitGatewayNetworkFunctionAttachment($args->toArray());
        return new ModifyTransitGatewayNetworkFunctionAttachmentResponse($result->toArray());
    }
}
