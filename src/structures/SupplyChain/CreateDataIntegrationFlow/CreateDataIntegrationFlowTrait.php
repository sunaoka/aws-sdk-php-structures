<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataIntegrationFlow;

trait CreateDataIntegrationFlowTrait
{
    /**
     * @param CreateDataIntegrationFlowRequest $args
     * @return CreateDataIntegrationFlowResponse
     */
    public function createDataIntegrationFlow(CreateDataIntegrationFlowRequest $args)
    {
        $result = parent::createDataIntegrationFlow($args->toArray());
        return new CreateDataIntegrationFlowResponse($result->toArray());
    }
}
