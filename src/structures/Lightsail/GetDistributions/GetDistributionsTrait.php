<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions;

trait GetDistributionsTrait
{
    /**
     * @param GetDistributionsRequest $args
     * @return GetDistributionsResponse
     */
    public function getDistributions(GetDistributionsRequest $args)
    {
        $result = parent::getDistributions($args->toArray());
        return new GetDistributionsResponse($result->toArray());
    }
}
