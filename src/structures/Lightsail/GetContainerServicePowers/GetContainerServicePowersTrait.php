<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServicePowers;

trait GetContainerServicePowersTrait
{
    /**
     * @param GetContainerServicePowersRequest $args
     * @return GetContainerServicePowersResponse
     */
    public function getContainerServicePowers(GetContainerServicePowersRequest $args)
    {
        $result = parent::getContainerServicePowers($args->toArray());
        return new GetContainerServicePowersResponse($result->toArray());
    }
}
