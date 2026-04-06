<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectMemberships;

trait ListProjectMembershipsTrait
{
    /**
     * @param ListProjectMembershipsRequest $args
     * @return ListProjectMembershipsResponse
     */
    public function listProjectMemberships(ListProjectMembershipsRequest $args)
    {
        $result = parent::listProjectMemberships($args->toArray());
        return new ListProjectMembershipsResponse($result->toArray());
    }
}
