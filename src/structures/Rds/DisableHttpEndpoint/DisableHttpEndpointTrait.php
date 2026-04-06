<?php

namespace Sunaoka\Aws\Structures\Rds\DisableHttpEndpoint;

trait DisableHttpEndpointTrait
{
    /**
     * @param DisableHttpEndpointRequest $args
     * @return DisableHttpEndpointResponse
     */
    public function disableHttpEndpoint(DisableHttpEndpointRequest $args)
    {
        $result = parent::disableHttpEndpoint($args->toArray());
        return new DisableHttpEndpointResponse($result->toArray());
    }
}
