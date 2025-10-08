<?php

namespace Sunaoka\Aws\Structures\Appstream\ListAssociatedFleets;

trait ListAssociatedFleetsTrait
{
    /**
     * @param ListAssociatedFleetsRequest $args
     * @return ListAssociatedFleetsResponse
     */
    public function listAssociatedFleets(ListAssociatedFleetsRequest $args)
    {
        $result = parent::listAssociatedFleets($args->toArray());
        return new ListAssociatedFleetsResponse($result->toArray());
    }
}
