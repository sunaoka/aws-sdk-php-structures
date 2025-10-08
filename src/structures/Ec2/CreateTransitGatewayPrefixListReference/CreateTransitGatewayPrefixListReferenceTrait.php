<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPrefixListReference;

trait CreateTransitGatewayPrefixListReferenceTrait
{
    /**
     * @param CreateTransitGatewayPrefixListReferenceRequest $args
     * @return CreateTransitGatewayPrefixListReferenceResponse
     */
    public function createTransitGatewayPrefixListReference(CreateTransitGatewayPrefixListReferenceRequest $args)
    {
        $result = parent::createTransitGatewayPrefixListReference($args->toArray());
        return new CreateTransitGatewayPrefixListReferenceResponse($result->toArray());
    }
}
