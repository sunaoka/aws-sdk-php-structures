<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\BatchDescribeEntities;

trait BatchDescribeEntitiesTrait
{
    /**
     * @param BatchDescribeEntitiesRequest $args
     * @return BatchDescribeEntitiesResponse
     */
    public function batchDescribeEntities(BatchDescribeEntitiesRequest $args)
    {
        $result = parent::batchDescribeEntities($args->toArray());
        return new BatchDescribeEntitiesResponse($result->toArray());
    }
}
