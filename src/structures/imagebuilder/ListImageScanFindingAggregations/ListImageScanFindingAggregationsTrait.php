<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindingAggregations;

trait ListImageScanFindingAggregationsTrait
{
    /**
     * @param ListImageScanFindingAggregationsRequest $args
     * @return ListImageScanFindingAggregationsResponse
     */
    public function listImageScanFindingAggregations(ListImageScanFindingAggregationsRequest $args)
    {
        $result = parent::listImageScanFindingAggregations($args->toArray());
        return new ListImageScanFindingAggregationsResponse($result->toArray());
    }
}
