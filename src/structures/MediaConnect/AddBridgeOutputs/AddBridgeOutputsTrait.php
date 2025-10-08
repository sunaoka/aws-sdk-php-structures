<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddBridgeOutputs;

trait AddBridgeOutputsTrait
{
    /**
     * @param AddBridgeOutputsRequest $args
     * @return AddBridgeOutputsResponse
     */
    public function addBridgeOutputs(AddBridgeOutputsRequest $args)
    {
        $result = parent::addBridgeOutputs($args->toArray());
        return new AddBridgeOutputsResponse($result->toArray());
    }
}
