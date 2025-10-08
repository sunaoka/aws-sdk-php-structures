<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow;

trait UpdateFlowTrait
{
    /**
     * @param UpdateFlowRequest $args
     * @return UpdateFlowResponse
     */
    public function updateFlow(UpdateFlowRequest $args)
    {
        $result = parent::updateFlow($args->toArray());
        return new UpdateFlowResponse($result->toArray());
    }
}
