<?php

namespace Sunaoka\Aws\Structures\kendra\BatchDeleteFeaturedResultsSet;

trait BatchDeleteFeaturedResultsSetTrait
{
    /**
     * @param BatchDeleteFeaturedResultsSetRequest $args
     * @return BatchDeleteFeaturedResultsSetResponse
     */
    public function batchDeleteFeaturedResultsSet(BatchDeleteFeaturedResultsSetRequest $args)
    {
        $result = parent::batchDeleteFeaturedResultsSet($args->toArray());
        return new BatchDeleteFeaturedResultsSetResponse($result->toArray());
    }
}
