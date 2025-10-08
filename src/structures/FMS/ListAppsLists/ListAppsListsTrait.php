<?php

namespace Sunaoka\Aws\Structures\FMS\ListAppsLists;

trait ListAppsListsTrait
{
    /**
     * @param ListAppsListsRequest $args
     * @return ListAppsListsResponse
     */
    public function listAppsLists(ListAppsListsRequest $args)
    {
        $result = parent::listAppsLists($args->toArray());
        return new ListAppsListsResponse($result->toArray());
    }
}
