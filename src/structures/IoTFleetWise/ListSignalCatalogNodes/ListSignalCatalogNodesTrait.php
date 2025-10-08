<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListSignalCatalogNodes;

trait ListSignalCatalogNodesTrait
{
    /**
     * @param ListSignalCatalogNodesRequest $args
     * @return ListSignalCatalogNodesResponse
     */
    public function listSignalCatalogNodes(ListSignalCatalogNodesRequest $args)
    {
        $result = parent::listSignalCatalogNodes($args->toArray());
        return new ListSignalCatalogNodesResponse($result->toArray());
    }
}
