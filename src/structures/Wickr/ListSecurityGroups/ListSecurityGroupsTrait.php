<?php

namespace Sunaoka\Aws\Structures\Wickr\ListSecurityGroups;

trait ListSecurityGroupsTrait
{
    /**
     * @param ListSecurityGroupsRequest $args
     * @return ListSecurityGroupsResponse
     */
    public function listSecurityGroups(ListSecurityGroupsRequest $args)
    {
        $result = parent::listSecurityGroups($args->toArray());
        return new ListSecurityGroupsResponse($result->toArray());
    }
}
