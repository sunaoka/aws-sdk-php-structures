<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeleteFlow;

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
