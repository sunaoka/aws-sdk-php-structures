<?php

namespace Sunaoka\Aws\Structures\kendra\CreateFeaturedResultsSet;

trait CreateFeaturedResultsSetTrait
{
    /**
     * @param CreateFeaturedResultsSetRequest $args
     * @return CreateFeaturedResultsSetResponse
     */
    public function createFeaturedResultsSet(CreateFeaturedResultsSetRequest $args)
    {
        $result = parent::createFeaturedResultsSet($args->toArray());
        return new CreateFeaturedResultsSetResponse($result->toArray());
    }
}
