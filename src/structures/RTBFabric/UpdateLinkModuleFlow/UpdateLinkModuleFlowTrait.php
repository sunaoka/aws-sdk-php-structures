<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateLinkModuleFlow;

trait UpdateLinkModuleFlowTrait
{
    /**
     * @param UpdateLinkModuleFlowRequest $args
     * @return UpdateLinkModuleFlowResponse
     */
    public function updateLinkModuleFlow(UpdateLinkModuleFlowRequest $args)
    {
        $result = parent::updateLinkModuleFlow($args->toArray());
        return new UpdateLinkModuleFlowResponse($result->toArray());
    }
}
