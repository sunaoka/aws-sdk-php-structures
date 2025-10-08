<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayAttachmentPropagations;

trait GetTransitGatewayAttachmentPropagationsTrait
{
    /**
     * @param GetTransitGatewayAttachmentPropagationsRequest $args
     * @return GetTransitGatewayAttachmentPropagationsResponse
     */
    public function getTransitGatewayAttachmentPropagations(GetTransitGatewayAttachmentPropagationsRequest $args)
    {
        $result = parent::getTransitGatewayAttachmentPropagations($args->toArray());
        return new GetTransitGatewayAttachmentPropagationsResponse($result->toArray());
    }
}
