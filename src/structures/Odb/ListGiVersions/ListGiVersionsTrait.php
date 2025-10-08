<?php

namespace Sunaoka\Aws\Structures\Odb\ListGiVersions;

trait ListGiVersionsTrait
{
    /**
     * @param ListGiVersionsRequest $args
     * @return ListGiVersionsResponse
     */
    public function listGiVersions(ListGiVersionsRequest $args)
    {
        $result = parent::listGiVersions($args->toArray());
        return new ListGiVersionsResponse($result->toArray());
    }
}
