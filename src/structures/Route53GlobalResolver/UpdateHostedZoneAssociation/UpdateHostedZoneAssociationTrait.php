<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateHostedZoneAssociation;

trait UpdateHostedZoneAssociationTrait
{
    /**
     * @param UpdateHostedZoneAssociationRequest $args
     * @return UpdateHostedZoneAssociationResponse
     */
    public function updateHostedZoneAssociation(UpdateHostedZoneAssociationRequest $args)
    {
        $result = parent::updateHostedZoneAssociation($args->toArray());
        return new UpdateHostedZoneAssociationResponse($result->toArray());
    }
}
