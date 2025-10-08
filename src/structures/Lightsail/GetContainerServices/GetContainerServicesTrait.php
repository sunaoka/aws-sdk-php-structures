<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServices;

trait GetContainerServicesTrait
{
    /**
     * @param GetContainerServicesRequest $args
     * @return GetContainerServicesResponse
     */
    public function getContainerServices(GetContainerServicesRequest $args)
    {
        $result = parent::getContainerServices($args->toArray());
        return new GetContainerServicesResponse($result->toArray());
    }
}
