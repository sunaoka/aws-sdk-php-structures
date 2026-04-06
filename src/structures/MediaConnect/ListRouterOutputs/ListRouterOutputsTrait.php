<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterOutputs;

trait ListRouterOutputsTrait
{
    /**
     * @param ListRouterOutputsRequest $args
     * @return ListRouterOutputsResponse
     */
    public function listRouterOutputs(ListRouterOutputsRequest $args)
    {
        $result = parent::listRouterOutputs($args->toArray());
        return new ListRouterOutputsResponse($result->toArray());
    }
}
