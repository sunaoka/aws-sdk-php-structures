<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateFindingAggregator;

trait UpdateFindingAggregatorTrait
{
    /**
     * @param UpdateFindingAggregatorRequest $args
     * @return UpdateFindingAggregatorResponse
     */
    public function updateFindingAggregator(UpdateFindingAggregatorRequest $args)
    {
        $result = parent::updateFindingAggregator($args->toArray());
        return new UpdateFindingAggregatorResponse($result->toArray());
    }
}
