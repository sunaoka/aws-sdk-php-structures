<?php

namespace Sunaoka\Aws\Structures\Route53\DisassociateVPCFromHostedZone;

trait DisassociateVPCFromHostedZoneTrait
{
    /**
     * @param DisassociateVPCFromHostedZoneRequest $args
     * @return DisassociateVPCFromHostedZoneResponse
     */
    public function disassociateVPCFromHostedZone(DisassociateVPCFromHostedZoneRequest $args)
    {
        $result = parent::disassociateVPCFromHostedZone($args->toArray());
        return new DisassociateVPCFromHostedZoneResponse($result->toArray());
    }
}
