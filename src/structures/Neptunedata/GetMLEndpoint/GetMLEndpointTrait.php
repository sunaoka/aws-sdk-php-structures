<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetMLEndpoint;

trait GetMLEndpointTrait
{
    /**
     * @param GetMLEndpointRequest $args
     * @return GetMLEndpointResponse
     */
    public function getMLEndpoint(GetMLEndpointRequest $args)
    {
        $result = parent::getMLEndpoint($args->toArray());
        return new GetMLEndpointResponse($result->toArray());
    }
}
