<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEntityOwners;

trait ListEntityOwnersTrait
{
    /**
     * @param ListEntityOwnersRequest $args
     * @return ListEntityOwnersResponse
     */
    public function listEntityOwners(ListEntityOwnersRequest $args)
    {
        $result = parent::listEntityOwners($args->toArray());
        return new ListEntityOwnersResponse($result->toArray());
    }
}
