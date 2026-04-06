<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementMembers;

trait ListEngagementMembersTrait
{
    /**
     * @param ListEngagementMembersRequest $args
     * @return ListEngagementMembersResponse
     */
    public function listEngagementMembers(ListEngagementMembersRequest $args)
    {
        $result = parent::listEngagementMembers($args->toArray());
        return new ListEngagementMembersResponse($result->toArray());
    }
}
