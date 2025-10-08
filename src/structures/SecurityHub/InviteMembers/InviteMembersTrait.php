<?php

namespace Sunaoka\Aws\Structures\SecurityHub\InviteMembers;

trait InviteMembersTrait
{
    /**
     * @param InviteMembersRequest $args
     * @return InviteMembersResponse
     */
    public function inviteMembers(InviteMembersRequest $args)
    {
        $result = parent::inviteMembers($args->toArray());
        return new InviteMembersResponse($result->toArray());
    }
}
