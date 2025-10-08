<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddBridgeSources;

trait AddBridgeSourcesTrait
{
    /**
     * @param AddBridgeSourcesRequest $args
     * @return AddBridgeSourcesResponse
     */
    public function addBridgeSources(AddBridgeSourcesRequest $args)
    {
        $result = parent::addBridgeSources($args->toArray());
        return new AddBridgeSourcesResponse($result->toArray());
    }
}
