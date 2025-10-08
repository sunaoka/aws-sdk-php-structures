<?php

namespace Sunaoka\Aws\Structures\Iot\ListDimensions;

trait ListDimensionsTrait
{
    /**
     * @param ListDimensionsRequest $args
     * @return ListDimensionsResponse
     */
    public function listDimensions(ListDimensionsRequest $args)
    {
        $result = parent::listDimensions($args->toArray());
        return new ListDimensionsResponse($result->toArray());
    }
}
