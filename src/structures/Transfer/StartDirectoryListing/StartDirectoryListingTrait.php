<?php

namespace Sunaoka\Aws\Structures\Transfer\StartDirectoryListing;

trait StartDirectoryListingTrait
{
    /**
     * @param StartDirectoryListingRequest $args
     * @return StartDirectoryListingResponse
     */
    public function startDirectoryListing(StartDirectoryListingRequest $args)
    {
        $result = parent::startDirectoryListing($args->toArray());
        return new StartDirectoryListingResponse($result->toArray());
    }
}
