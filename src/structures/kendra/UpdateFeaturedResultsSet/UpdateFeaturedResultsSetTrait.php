<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateFeaturedResultsSet;

trait UpdateFeaturedResultsSetTrait
{
    /**
     * @param UpdateFeaturedResultsSetRequest $args
     * @return UpdateFeaturedResultsSetResponse
     */
    public function updateFeaturedResultsSet(UpdateFeaturedResultsSetRequest $args)
    {
        $result = parent::updateFeaturedResultsSet($args->toArray());
        return new UpdateFeaturedResultsSetResponse($result->toArray());
    }
}
