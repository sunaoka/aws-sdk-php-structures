<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteFindingAggregator;

trait DeleteFindingAggregatorTrait
{
    /**
     * @param DeleteFindingAggregatorRequest $args
     * @return DeleteFindingAggregatorResponse
     */
    public function deleteFindingAggregator(DeleteFindingAggregatorRequest $args)
    {
        $result = parent::deleteFindingAggregator($args->toArray());
        return new DeleteFindingAggregatorResponse($result->toArray());
    }
}
