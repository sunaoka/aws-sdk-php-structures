<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AssociateAvailabilityZones;

trait AssociateAvailabilityZonesTrait
{
    /**
     * @param AssociateAvailabilityZonesRequest $args
     * @return AssociateAvailabilityZonesResponse
     */
    public function associateAvailabilityZones(AssociateAvailabilityZonesRequest $args)
    {
        $result = parent::associateAvailabilityZones($args->toArray());
        return new AssociateAvailabilityZonesResponse($result->toArray());
    }
}
