<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingAggregator;

trait GetFindingAggregatorTrait
{
    /**
     * @param GetFindingAggregatorRequest $args
     * @return GetFindingAggregatorResponse
     */
    public function getFindingAggregator(GetFindingAggregatorRequest $args)
    {
        $result = parent::getFindingAggregator($args->toArray());
        return new GetFindingAggregatorResponse($result->toArray());
    }
}
