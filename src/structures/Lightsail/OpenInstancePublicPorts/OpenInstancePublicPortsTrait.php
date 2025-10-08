<?php

namespace Sunaoka\Aws\Structures\Lightsail\OpenInstancePublicPorts;

trait OpenInstancePublicPortsTrait
{
    /**
     * @param OpenInstancePublicPortsRequest $args
     * @return OpenInstancePublicPortsResponse
     */
    public function openInstancePublicPorts(OpenInstancePublicPortsRequest $args)
    {
        $result = parent::openInstancePublicPorts($args->toArray());
        return new OpenInstancePublicPortsResponse($result->toArray());
    }
}
