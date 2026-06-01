<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteFlow;

trait DeleteFlowTrait
{
    /**
     * @param DeleteFlowRequest $args
     * @return DeleteFlowResponse
     */
    public function deleteFlow(DeleteFlowRequest $args)
    {
        $result = parent::deleteFlow($args->toArray());
        return new DeleteFlowResponse($result->toArray());
    }
}
