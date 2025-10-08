<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListModelManifestNodes;

trait ListModelManifestNodesTrait
{
    /**
     * @param ListModelManifestNodesRequest $args
     * @return ListModelManifestNodesResponse
     */
    public function listModelManifestNodes(ListModelManifestNodesRequest $args)
    {
        $result = parent::listModelManifestNodes($args->toArray());
        return new ListModelManifestNodesResponse($result->toArray());
    }
}
