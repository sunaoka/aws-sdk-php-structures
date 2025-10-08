<?php

namespace Sunaoka\Aws\Structures\Lightsail\CloseInstancePublicPorts;

trait CloseInstancePublicPortsTrait
{
    /**
     * @param CloseInstancePublicPortsRequest $args
     * @return CloseInstancePublicPortsResponse
     */
    public function closeInstancePublicPorts(CloseInstancePublicPortsRequest $args)
    {
        $result = parent::closeInstancePublicPorts($args->toArray());
        return new CloseInstancePublicPortsResponse($result->toArray());
    }
}
