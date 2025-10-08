<?php

namespace Sunaoka\Aws\Structures\IdentityStore\GetGroupMembershipId;

trait GetGroupMembershipIdTrait
{
    /**
     * @param GetGroupMembershipIdRequest $args
     * @return GetGroupMembershipIdResponse
     */
    public function getGroupMembershipId(GetGroupMembershipIdRequest $args)
    {
        $result = parent::getGroupMembershipId($args->toArray());
        return new GetGroupMembershipIdResponse($result->toArray());
    }
}
