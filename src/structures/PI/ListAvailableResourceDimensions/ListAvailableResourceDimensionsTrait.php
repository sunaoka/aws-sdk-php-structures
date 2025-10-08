<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceDimensions;

trait ListAvailableResourceDimensionsTrait
{
    /**
     * @param ListAvailableResourceDimensionsRequest $args
     * @return ListAvailableResourceDimensionsResponse
     */
    public function listAvailableResourceDimensions(ListAvailableResourceDimensionsRequest $args)
    {
        $result = parent::listAvailableResourceDimensions($args->toArray());
        return new ListAvailableResourceDimensionsResponse($result->toArray());
    }
}
