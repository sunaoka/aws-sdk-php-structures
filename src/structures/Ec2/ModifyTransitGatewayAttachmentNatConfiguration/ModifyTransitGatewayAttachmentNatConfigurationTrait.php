<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayAttachmentNatConfiguration;

trait ModifyTransitGatewayAttachmentNatConfigurationTrait
{
    /**
     * @param ModifyTransitGatewayAttachmentNatConfigurationRequest $args
     * @return ModifyTransitGatewayAttachmentNatConfigurationResponse
     */
    public function modifyTransitGatewayAttachmentNatConfiguration(ModifyTransitGatewayAttachmentNatConfigurationRequest $args)
    {
        $result = parent::modifyTransitGatewayAttachmentNatConfiguration($args->toArray());
        return new ModifyTransitGatewayAttachmentNatConfigurationResponse($result->toArray());
    }
}
