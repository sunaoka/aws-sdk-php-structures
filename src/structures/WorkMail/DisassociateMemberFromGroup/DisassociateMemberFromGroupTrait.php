<?php

namespace Sunaoka\Aws\Structures\WorkMail\DisassociateMemberFromGroup;

trait DisassociateMemberFromGroupTrait
{
    /**
     * @param DisassociateMemberFromGroupRequest $args
     * @return DisassociateMemberFromGroupResponse
     */
    public function disassociateMemberFromGroup(DisassociateMemberFromGroupRequest $args)
    {
        $result = parent::disassociateMemberFromGroup($args->toArray());
        return new DisassociateMemberFromGroupResponse($result->toArray());
    }
}
