<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListFindingAggregators;

trait ListFindingAggregatorsTrait
{
    /**
     * @param ListFindingAggregatorsRequest $args
     * @return ListFindingAggregatorsResponse
     */
    public function listFindingAggregators(ListFindingAggregatorsRequest $args)
    {
        $result = parent::listFindingAggregators($args->toArray());
        return new ListFindingAggregatorsResponse($result->toArray());
    }
}
