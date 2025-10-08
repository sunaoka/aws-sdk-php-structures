<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\AssociateIpGroups;

trait AssociateIpGroupsTrait
{
    /**
     * @param AssociateIpGroupsRequest $args
     * @return AssociateIpGroupsResponse
     */
    public function associateIpGroups(AssociateIpGroupsRequest $args)
    {
        $result = parent::associateIpGroups($args->toArray());
        return new AssociateIpGroupsResponse($result->toArray());
    }
}
