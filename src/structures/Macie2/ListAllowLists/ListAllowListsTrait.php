<?php

namespace Sunaoka\Aws\Structures\Macie2\ListAllowLists;

trait ListAllowListsTrait
{
    /**
     * @param ListAllowListsRequest $args
     * @return ListAllowListsResponse
     */
    public function listAllowLists(ListAllowListsRequest $args)
    {
        $result = parent::listAllowLists($args->toArray());
        return new ListAllowListsResponse($result->toArray());
    }
}
