<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlowExecution;

trait GetDataIntegrationFlowExecutionTrait
{
    /**
     * @param GetDataIntegrationFlowExecutionRequest $args
     * @return GetDataIntegrationFlowExecutionResponse
     */
    public function getDataIntegrationFlowExecution(GetDataIntegrationFlowExecutionRequest $args)
    {
        $result = parent::getDataIntegrationFlowExecution($args->toArray());
        return new GetDataIntegrationFlowExecutionResponse($result->toArray());
    }
}
