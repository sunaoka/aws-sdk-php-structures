<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListHostedZoneAssociations;

trait ListHostedZoneAssociationsTrait
{
    /**
     * @param ListHostedZoneAssociationsRequest $args
     * @return ListHostedZoneAssociationsResponse
     */
    public function listHostedZoneAssociations(ListHostedZoneAssociationsRequest $args)
    {
        $result = parent::listHostedZoneAssociations($args->toArray());
        return new ListHostedZoneAssociationsResponse($result->toArray());
    }
}
