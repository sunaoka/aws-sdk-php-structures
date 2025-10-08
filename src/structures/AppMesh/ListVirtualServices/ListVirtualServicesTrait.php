<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListVirtualServices;

trait ListVirtualServicesTrait
{
    /**
     * @param ListVirtualServicesRequest $args
     * @return ListVirtualServicesResponse
     */
    public function listVirtualServices(ListVirtualServicesRequest $args)
    {
        $result = parent::listVirtualServices($args->toArray());
        return new ListVirtualServicesResponse($result->toArray());
    }
}
