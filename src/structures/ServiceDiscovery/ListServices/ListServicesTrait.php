<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListServices;

trait ListServicesTrait
{
    /**
     * @param ListServicesRequest $args
     * @return ListServicesResponse
     */
    public function listServices(ListServicesRequest $args)
    {
        $result = parent::listServices($args->toArray());
        return new ListServicesResponse($result->toArray());
    }
}
