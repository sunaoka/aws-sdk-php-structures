<?php

namespace Sunaoka\Aws\Structures\Lightsail\PutInstancePublicPorts;

trait PutInstancePublicPortsTrait
{
    /**
     * @param PutInstancePublicPortsRequest $args
     * @return PutInstancePublicPortsResponse
     */
    public function putInstancePublicPorts(PutInstancePublicPortsRequest $args)
    {
        $result = parent::putInstancePublicPorts($args->toArray());
        return new PutInstancePublicPortsResponse($result->toArray());
    }
}
