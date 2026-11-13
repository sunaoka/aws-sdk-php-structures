<?php

namespace Sunaoka\Aws\Structures\Lightsail\CheckSubdomainAvailability;

trait CheckSubdomainAvailabilityTrait
{
    /**
     * @param CheckSubdomainAvailabilityRequest $args
     * @return CheckSubdomainAvailabilityResponse
     */
    public function checkSubdomainAvailability(CheckSubdomainAvailabilityRequest $args)
    {
        $result = parent::checkSubdomainAvailability($args->toArray());
        return new CheckSubdomainAvailabilityResponse($result->toArray());
    }
}
