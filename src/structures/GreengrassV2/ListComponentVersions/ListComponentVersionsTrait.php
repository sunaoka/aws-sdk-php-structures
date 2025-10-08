<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListComponentVersions;

trait ListComponentVersionsTrait
{
    /**
     * @param ListComponentVersionsRequest $args
     * @return ListComponentVersionsResponse
     */
    public function listComponentVersions(ListComponentVersionsRequest $args)
    {
        $result = parent::listComponentVersions($args->toArray());
        return new ListComponentVersionsResponse($result->toArray());
    }
}
