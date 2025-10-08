<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateFindingAggregator;

trait CreateFindingAggregatorTrait
{
    /**
     * @param CreateFindingAggregatorRequest $args
     * @return CreateFindingAggregatorResponse
     */
    public function createFindingAggregator(CreateFindingAggregatorRequest $args)
    {
        $result = parent::createFindingAggregator($args->toArray());
        return new CreateFindingAggregatorResponse($result->toArray());
    }
}
