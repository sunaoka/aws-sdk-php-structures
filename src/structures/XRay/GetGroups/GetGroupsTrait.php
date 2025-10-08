<?php

namespace Sunaoka\Aws\Structures\XRay\GetGroups;

trait GetGroupsTrait
{
    /**
     * @param GetGroupsRequest $args
     * @return GetGroupsResponse
     */
    public function getGroups(GetGroupsRequest $args)
    {
        $result = parent::getGroups($args->toArray());
        return new GetGroupsResponse($result->toArray());
    }
}
