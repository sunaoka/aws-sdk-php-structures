<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayAttachmentNatConfiguration;

trait GetTransitGatewayAttachmentNatConfigurationTrait
{
    /**
     * @param GetTransitGatewayAttachmentNatConfigurationRequest $args
     * @return GetTransitGatewayAttachmentNatConfigurationResponse
     */
    public function getTransitGatewayAttachmentNatConfiguration(GetTransitGatewayAttachmentNatConfigurationRequest $args)
    {
        $result = parent::getTransitGatewayAttachmentNatConfiguration($args->toArray());
        return new GetTransitGatewayAttachmentNatConfigurationResponse($result->toArray());
    }
}
