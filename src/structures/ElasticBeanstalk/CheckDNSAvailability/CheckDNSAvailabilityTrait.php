<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CheckDNSAvailability;

trait CheckDNSAvailabilityTrait
{
    /**
     * @param CheckDNSAvailabilityRequest $args
     * @return CheckDNSAvailabilityResponse
     */
    public function checkDNSAvailability(CheckDNSAvailabilityRequest $args)
    {
        $result = parent::checkDNSAvailability($args->toArray());
        return new CheckDNSAvailabilityResponse($result->toArray());
    }
}
