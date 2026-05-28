<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceTopologyEdges;

trait ListServiceTopologyEdgesTrait
{
    /**
     * @param ListServiceTopologyEdgesRequest $args
     * @return ListServiceTopologyEdgesResponse
     */
    public function listServiceTopologyEdges(ListServiceTopologyEdgesRequest $args)
    {
        $result = parent::listServiceTopologyEdges($args->toArray());
        return new ListServiceTopologyEdgesResponse($result->toArray());
    }
}
