<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayPrefixListReferences;

trait GetTransitGatewayPrefixListReferencesTrait
{
    /**
     * @param GetTransitGatewayPrefixListReferencesRequest $args
     * @return GetTransitGatewayPrefixListReferencesResponse
     */
    public function getTransitGatewayPrefixListReferences(GetTransitGatewayPrefixListReferencesRequest $args)
    {
        $result = parent::getTransitGatewayPrefixListReferences($args->toArray());
        return new GetTransitGatewayPrefixListReferencesResponse($result->toArray());
    }
}
