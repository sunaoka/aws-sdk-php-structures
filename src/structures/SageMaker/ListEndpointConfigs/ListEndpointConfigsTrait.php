<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListEndpointConfigs;

trait ListEndpointConfigsTrait
{
    /**
     * @param ListEndpointConfigsRequest $args
     * @return ListEndpointConfigsResponse
     */
    public function listEndpointConfigs(ListEndpointConfigsRequest $args)
    {
        $result = parent::listEndpointConfigs($args->toArray());
        return new ListEndpointConfigsResponse($result->toArray());
    }
}
