<?php

namespace Sunaoka\Aws\Structures\SupplyChain\DeleteDataIntegrationFlow;

trait DeleteDataIntegrationFlowTrait
{
    /**
     * @param DeleteDataIntegrationFlowRequest $args
     * @return DeleteDataIntegrationFlowResponse
     */
    public function deleteDataIntegrationFlow(DeleteDataIntegrationFlowRequest $args)
    {
        $result = parent::deleteDataIntegrationFlow($args->toArray());
        return new DeleteDataIntegrationFlowResponse($result->toArray());
    }
}
