<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DisassociateAvailabilityZones;

trait DisassociateAvailabilityZonesTrait
{
    /**
     * @param DisassociateAvailabilityZonesRequest $args
     * @return DisassociateAvailabilityZonesResponse
     */
    public function disassociateAvailabilityZones(DisassociateAvailabilityZonesRequest $args)
    {
        $result = parent::disassociateAvailabilityZones($args->toArray());
        return new DisassociateAvailabilityZonesResponse($result->toArray());
    }
}
