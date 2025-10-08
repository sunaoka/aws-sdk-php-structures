<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationFlows;

trait ListDataIntegrationFlowsTrait
{
    /**
     * @param ListDataIntegrationFlowsRequest $args
     * @return ListDataIntegrationFlowsResponse
     */
    public function listDataIntegrationFlows(ListDataIntegrationFlowsRequest $args)
    {
        $result = parent::listDataIntegrationFlows($args->toArray());
        return new ListDataIntegrationFlowsResponse($result->toArray());
    }
}
