<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListProviderServices;

trait ListProviderServicesTrait
{
    /**
     * @param ListProviderServicesRequest $args
     * @return ListProviderServicesResponse
     */
    public function listProviderServices(ListProviderServicesRequest $args)
    {
        $result = parent::listProviderServices($args->toArray());
        return new ListProviderServicesResponse($result->toArray());
    }
}
