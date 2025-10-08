<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetServiceAttributes;

trait GetServiceAttributesTrait
{
    /**
     * @param GetServiceAttributesRequest $args
     * @return GetServiceAttributesResponse
     */
    public function getServiceAttributes(GetServiceAttributesRequest $args)
    {
        $result = parent::getServiceAttributes($args->toArray());
        return new GetServiceAttributesResponse($result->toArray());
    }
}
