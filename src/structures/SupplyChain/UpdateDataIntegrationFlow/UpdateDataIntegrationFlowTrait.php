<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataIntegrationFlow;

trait UpdateDataIntegrationFlowTrait
{
    /**
     * @param UpdateDataIntegrationFlowRequest $args
     * @return UpdateDataIntegrationFlowResponse
     */
    public function updateDataIntegrationFlow(UpdateDataIntegrationFlowRequest $args)
    {
        $result = parent::updateDataIntegrationFlow($args->toArray());
        return new UpdateDataIntegrationFlowResponse($result->toArray());
    }
}
