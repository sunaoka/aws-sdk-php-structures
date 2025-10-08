<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListGroupVersions;

trait ListGroupVersionsTrait
{
    /**
     * @param ListGroupVersionsRequest $args
     * @return ListGroupVersionsResponse
     */
    public function listGroupVersions(ListGroupVersionsRequest $args)
    {
        $result = parent::listGroupVersions($args->toArray());
        return new ListGroupVersionsResponse($result->toArray());
    }
}
