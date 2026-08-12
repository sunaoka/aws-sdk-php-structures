<?php

namespace Sunaoka\Aws\Structures\Odb\ListGiMinorVersions;

trait ListGiMinorVersionsTrait
{
    /**
     * @param ListGiMinorVersionsRequest $args
     * @return ListGiMinorVersionsResponse
     */
    public function listGiMinorVersions(ListGiMinorVersionsRequest $args)
    {
        $result = parent::listGiMinorVersions($args->toArray());
        return new ListGiMinorVersionsResponse($result->toArray());
    }
}
