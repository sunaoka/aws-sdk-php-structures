<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DisassociateHostedZone;

trait DisassociateHostedZoneTrait
{
    /**
     * @param DisassociateHostedZoneRequest $args
     * @return DisassociateHostedZoneResponse
     */
    public function disassociateHostedZone(DisassociateHostedZoneRequest $args)
    {
        $result = parent::disassociateHostedZone($args->toArray());
        return new DisassociateHostedZoneResponse($result->toArray());
    }
}
