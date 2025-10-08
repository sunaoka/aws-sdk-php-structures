<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowSources;

trait AddFlowSourcesTrait
{
    /**
     * @param AddFlowSourcesRequest $args
     * @return AddFlowSourcesResponse
     */
    public function addFlowSources(AddFlowSourcesRequest $args)
    {
        $result = parent::addFlowSources($args->toArray());
        return new AddFlowSourcesResponse($result->toArray());
    }
}
