<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetDimensionValues;

trait GetDimensionValuesTrait
{
    /**
     * @param GetDimensionValuesRequest $args
     * @return GetDimensionValuesResponse
     */
    public function getDimensionValues(GetDimensionValuesRequest $args)
    {
        $result = parent::getDimensionValues($args->toArray());
        return new GetDimensionValuesResponse($result->toArray());
    }
}
