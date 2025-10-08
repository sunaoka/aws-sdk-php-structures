<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowOutputs;

trait AddFlowOutputsTrait
{
    /**
     * @param AddFlowOutputsRequest $args
     * @return AddFlowOutputsResponse
     */
    public function addFlowOutputs(AddFlowOutputsRequest $args)
    {
        $result = parent::addFlowOutputs($args->toArray());
        return new AddFlowOutputsResponse($result->toArray());
    }
}
