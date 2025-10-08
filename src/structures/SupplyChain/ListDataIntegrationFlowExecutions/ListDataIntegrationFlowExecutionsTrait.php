<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationFlowExecutions;

trait ListDataIntegrationFlowExecutionsTrait
{
    /**
     * @param ListDataIntegrationFlowExecutionsRequest $args
     * @return ListDataIntegrationFlowExecutionsResponse
     */
    public function listDataIntegrationFlowExecutions(ListDataIntegrationFlowExecutionsRequest $args)
    {
        $result = parent::listDataIntegrationFlowExecutions($args->toArray());
        return new ListDataIntegrationFlowExecutionsResponse($result->toArray());
    }
}
