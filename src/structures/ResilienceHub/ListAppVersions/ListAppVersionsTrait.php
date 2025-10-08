<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersions;

trait ListAppVersionsTrait
{
    /**
     * @param ListAppVersionsRequest $args
     * @return ListAppVersionsResponse
     */
    public function listAppVersions(ListAppVersionsRequest $args)
    {
        $result = parent::listAppVersions($args->toArray());
        return new ListAppVersionsResponse($result->toArray());
    }
}
