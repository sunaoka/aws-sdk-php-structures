<?php

namespace Sunaoka\Aws\Structures\Connect\ListViewVersions;

trait ListViewVersionsTrait
{
    /**
     * @param ListViewVersionsRequest $args
     * @return ListViewVersionsResponse
     */
    public function listViewVersions(ListViewVersionsRequest $args)
    {
        $result = parent::listViewVersions($args->toArray());
        return new ListViewVersionsResponse($result->toArray());
    }
}
