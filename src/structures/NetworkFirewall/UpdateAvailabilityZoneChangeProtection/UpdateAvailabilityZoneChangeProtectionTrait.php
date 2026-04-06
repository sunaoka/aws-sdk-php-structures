<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateAvailabilityZoneChangeProtection;

trait UpdateAvailabilityZoneChangeProtectionTrait
{
    /**
     * @param UpdateAvailabilityZoneChangeProtectionRequest $args
     * @return UpdateAvailabilityZoneChangeProtectionResponse
     */
    public function updateAvailabilityZoneChangeProtection(UpdateAvailabilityZoneChangeProtectionRequest $args)
    {
        $result = parent::updateAvailabilityZoneChangeProtection($args->toArray());
        return new UpdateAvailabilityZoneChangeProtectionResponse($result->toArray());
    }
}
