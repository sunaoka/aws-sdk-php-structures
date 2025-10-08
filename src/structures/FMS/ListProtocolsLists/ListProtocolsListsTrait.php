<?php

namespace Sunaoka\Aws\Structures\FMS\ListProtocolsLists;

trait ListProtocolsListsTrait
{
    /**
     * @param ListProtocolsListsRequest $args
     * @return ListProtocolsListsResponse
     */
    public function listProtocolsLists(ListProtocolsListsRequest $args)
    {
        $result = parent::listProtocolsLists($args->toArray());
        return new ListProtocolsListsResponse($result->toArray());
    }
}
