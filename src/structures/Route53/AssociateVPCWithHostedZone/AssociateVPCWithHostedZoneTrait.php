<?php

namespace Sunaoka\Aws\Structures\Route53\AssociateVPCWithHostedZone;

trait AssociateVPCWithHostedZoneTrait
{
    /**
     * @param AssociateVPCWithHostedZoneRequest $args
     * @return AssociateVPCWithHostedZoneResponse
     */
    public function associateVPCWithHostedZone(AssociateVPCWithHostedZoneRequest $args)
    {
        $result = parent::associateVPCWithHostedZone($args->toArray());
        return new AssociateVPCWithHostedZoneResponse($result->toArray());
    }
}
