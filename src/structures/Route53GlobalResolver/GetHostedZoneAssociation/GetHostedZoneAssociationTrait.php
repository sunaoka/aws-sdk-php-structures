<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetHostedZoneAssociation;

trait GetHostedZoneAssociationTrait
{
    /**
     * @param GetHostedZoneAssociationRequest $args
     * @return GetHostedZoneAssociationResponse
     */
    public function getHostedZoneAssociation(GetHostedZoneAssociationRequest $args)
    {
        $result = parent::getHostedZoneAssociation($args->toArray());
        return new GetHostedZoneAssociationResponse($result->toArray());
    }
}
