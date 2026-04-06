<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\AssociateHostedZone;

trait AssociateHostedZoneTrait
{
    /**
     * @param AssociateHostedZoneRequest $args
     * @return AssociateHostedZoneResponse
     */
    public function associateHostedZone(AssociateHostedZoneRequest $args)
    {
        $result = parent::associateHostedZone($args->toArray());
        return new AssociateHostedZoneResponse($result->toArray());
    }
}
