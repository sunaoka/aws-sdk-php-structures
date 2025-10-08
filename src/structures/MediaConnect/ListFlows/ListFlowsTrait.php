<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListFlows;

trait ListFlowsTrait
{
    /**
     * @param ListFlowsRequest $args
     * @return ListFlowsResponse
     */
    public function listFlows(ListFlowsRequest $args)
    {
        $result = parent::listFlows($args->toArray());
        return new ListFlowsResponse($result->toArray());
    }
}
