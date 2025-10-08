<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeManagedEndpoint;

trait DescribeManagedEndpointTrait
{
    /**
     * @param DescribeManagedEndpointRequest $args
     * @return DescribeManagedEndpointResponse
     */
    public function describeManagedEndpoint(DescribeManagedEndpointRequest $args)
    {
        $result = parent::describeManagedEndpoint($args->toArray());
        return new DescribeManagedEndpointResponse($result->toArray());
    }
}
