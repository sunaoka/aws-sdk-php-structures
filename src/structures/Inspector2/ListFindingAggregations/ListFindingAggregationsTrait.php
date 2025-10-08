<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations;

trait ListFindingAggregationsTrait
{
    /**
     * @param ListFindingAggregationsRequest $args
     * @return ListFindingAggregationsResponse
     */
    public function listFindingAggregations(ListFindingAggregationsRequest $args)
    {
        $result = parent::listFindingAggregations($args->toArray());
        return new ListFindingAggregationsResponse($result->toArray());
    }
}
