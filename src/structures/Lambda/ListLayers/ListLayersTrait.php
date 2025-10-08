<?php

namespace Sunaoka\Aws\Structures\Lambda\ListLayers;

trait ListLayersTrait
{
    /**
     * @param ListLayersRequest $args
     * @return ListLayersResponse
     */
    public function listLayers(ListLayersRequest $args)
    {
        $result = parent::listLayers($args->toArray());
        return new ListLayersResponse($result->toArray());
    }
}
