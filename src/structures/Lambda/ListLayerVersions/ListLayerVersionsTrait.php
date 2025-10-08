<?php

namespace Sunaoka\Aws\Structures\Lambda\ListLayerVersions;

trait ListLayerVersionsTrait
{
    /**
     * @param ListLayerVersionsRequest $args
     * @return ListLayerVersionsResponse
     */
    public function listLayerVersions(ListLayerVersionsRequest $args)
    {
        $result = parent::listLayerVersions($args->toArray());
        return new ListLayerVersionsResponse($result->toArray());
    }
}
