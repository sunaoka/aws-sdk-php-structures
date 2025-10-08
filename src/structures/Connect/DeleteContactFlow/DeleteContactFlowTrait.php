<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactFlow;

trait DeleteContactFlowTrait
{
    /**
     * @param DeleteContactFlowRequest $args
     * @return DeleteContactFlowResponse
     */
    public function deleteContactFlow(DeleteContactFlowRequest $args)
    {
        $result = parent::deleteContactFlow($args->toArray());
        return new DeleteContactFlowResponse($result->toArray());
    }
}
