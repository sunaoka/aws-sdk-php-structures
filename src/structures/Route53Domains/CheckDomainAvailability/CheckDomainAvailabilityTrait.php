<?php

namespace Sunaoka\Aws\Structures\Route53Domains\CheckDomainAvailability;

trait CheckDomainAvailabilityTrait
{
    /**
     * @param CheckDomainAvailabilityRequest $args
     * @return CheckDomainAvailabilityResponse
     */
    public function checkDomainAvailability(CheckDomainAvailabilityRequest $args)
    {
        $result = parent::checkDomainAvailability($args->toArray());
        return new CheckDomainAvailabilityResponse($result->toArray());
    }
}
