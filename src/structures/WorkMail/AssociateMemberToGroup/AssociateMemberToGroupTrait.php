<?php

namespace Sunaoka\Aws\Structures\WorkMail\AssociateMemberToGroup;

trait AssociateMemberToGroupTrait
{
    /**
     * @param AssociateMemberToGroupRequest $args
     * @return AssociateMemberToGroupResponse
     */
    public function associateMemberToGroup(AssociateMemberToGroupRequest $args)
    {
        $result = parent::associateMemberToGroup($args->toArray());
        return new AssociateMemberToGroupResponse($result->toArray());
    }
}
