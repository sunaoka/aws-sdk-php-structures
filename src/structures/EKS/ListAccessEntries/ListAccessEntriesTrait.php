<?php

namespace Sunaoka\Aws\Structures\EKS\ListAccessEntries;

trait ListAccessEntriesTrait
{
    /**
     * @param ListAccessEntriesRequest $args
     * @return ListAccessEntriesResponse
     */
    public function listAccessEntries(ListAccessEntriesRequest $args)
    {
        $result = parent::listAccessEntries($args->toArray());
        return new ListAccessEntriesResponse($result->toArray());
    }
}
