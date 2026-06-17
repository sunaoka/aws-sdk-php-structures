<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListHarnessEndpoints;

trait ListHarnessEndpointsTrait
{
    /**
     * @param ListHarnessEndpointsRequest $args
     * @return ListHarnessEndpointsResponse
     */
    public function listHarnessEndpoints(ListHarnessEndpointsRequest $args)
    {
        $result = parent::listHarnessEndpoints($args->toArray());
        return new ListHarnessEndpointsResponse($result->toArray());
    }
}
