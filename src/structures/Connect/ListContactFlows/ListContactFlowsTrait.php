<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlows;

trait ListContactFlowsTrait
{
    /**
     * @param ListContactFlowsRequest $args
     * @return ListContactFlowsResponse
     */
    public function listContactFlows(ListContactFlowsRequest $args)
    {
        $result = parent::listContactFlows($args->toArray());
        return new ListContactFlowsResponse($result->toArray());
    }
}
