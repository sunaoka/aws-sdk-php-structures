<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteListing;

trait DeleteListingTrait
{
    /**
     * @param DeleteListingRequest $args
     * @return DeleteListingResponse
     */
    public function deleteListing(DeleteListingRequest $args)
    {
        $result = parent::deleteListing($args->toArray());
        return new DeleteListingResponse($result->toArray());
    }
}
