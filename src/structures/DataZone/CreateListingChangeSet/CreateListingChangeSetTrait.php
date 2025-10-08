<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateListingChangeSet;

trait CreateListingChangeSetTrait
{
    /**
     * @param CreateListingChangeSetRequest $args
     * @return CreateListingChangeSetResponse
     */
    public function createListingChangeSet(CreateListingChangeSetRequest $args)
    {
        $result = parent::createListingChangeSet($args->toArray());
        return new CreateListingChangeSetResponse($result->toArray());
    }
}
