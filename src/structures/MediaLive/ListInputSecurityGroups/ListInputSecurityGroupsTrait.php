<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputSecurityGroups;

trait ListInputSecurityGroupsTrait
{
    /**
     * @param ListInputSecurityGroupsRequest $args
     * @return ListInputSecurityGroupsResponse
     */
    public function listInputSecurityGroups(ListInputSecurityGroupsRequest $args)
    {
        $result = parent::listInputSecurityGroups($args->toArray());
        return new ListInputSecurityGroupsResponse($result->toArray());
    }
}
