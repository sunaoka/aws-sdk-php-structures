<?php

namespace Sunaoka\Aws\Structures\Evs\GetVersions;

trait GetVersionsTrait
{
    /**
     * @param GetVersionsRequest $args
     * @return GetVersionsResponse
     */
    public function getVersions(GetVersionsRequest $args)
    {
        $result = parent::getVersions($args->toArray());
        return new GetVersionsResponse($result->toArray());
    }
}
