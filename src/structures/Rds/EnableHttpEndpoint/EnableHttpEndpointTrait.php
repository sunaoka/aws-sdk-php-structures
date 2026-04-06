<?php

namespace Sunaoka\Aws\Structures\Rds\EnableHttpEndpoint;

trait EnableHttpEndpointTrait
{
    /**
     * @param EnableHttpEndpointRequest $args
     * @return EnableHttpEndpointResponse
     */
    public function enableHttpEndpoint(EnableHttpEndpointRequest $args)
    {
        $result = parent::enableHttpEndpoint($args->toArray());
        return new EnableHttpEndpointResponse($result->toArray());
    }
}
