<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayPrefixListReference;

trait DeleteTransitGatewayPrefixListReferenceTrait
{
    /**
     * @param DeleteTransitGatewayPrefixListReferenceRequest $args
     * @return DeleteTransitGatewayPrefixListReferenceResponse
     */
    public function deleteTransitGatewayPrefixListReference(DeleteTransitGatewayPrefixListReferenceRequest $args)
    {
        $result = parent::deleteTransitGatewayPrefixListReference($args->toArray());
        return new DeleteTransitGatewayPrefixListReferenceResponse($result->toArray());
    }
}
