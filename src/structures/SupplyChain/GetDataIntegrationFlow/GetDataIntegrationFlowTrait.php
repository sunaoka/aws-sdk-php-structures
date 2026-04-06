<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlow;

trait GetDataIntegrationFlowTrait
{
    /**
     * @param GetDataIntegrationFlowRequest $args
     * @return GetDataIntegrationFlowResponse
     */
    public function getDataIntegrationFlow(GetDataIntegrationFlowRequest $args)
    {
        $result = parent::getDataIntegrationFlow($args->toArray());
        return new GetDataIntegrationFlowResponse($result->toArray());
    }
}
