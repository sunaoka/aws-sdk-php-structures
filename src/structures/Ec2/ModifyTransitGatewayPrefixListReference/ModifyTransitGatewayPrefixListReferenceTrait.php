<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayPrefixListReference;

trait ModifyTransitGatewayPrefixListReferenceTrait
{
    /**
     * @param ModifyTransitGatewayPrefixListReferenceRequest $args
     * @return ModifyTransitGatewayPrefixListReferenceResponse
     */
    public function modifyTransitGatewayPrefixListReference(ModifyTransitGatewayPrefixListReferenceRequest $args)
    {
        $result = parent::modifyTransitGatewayPrefixListReference($args->toArray());
        return new ModifyTransitGatewayPrefixListReferenceResponse($result->toArray());
    }
}
