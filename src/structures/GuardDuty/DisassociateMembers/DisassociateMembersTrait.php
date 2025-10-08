<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DisassociateMembers;

trait DisassociateMembersTrait
{
    /**
     * @param DisassociateMembersRequest $args
     * @return DisassociateMembersResponse
     */
    public function disassociateMembers(DisassociateMembersRequest $args)
    {
        $result = parent::disassociateMembers($args->toArray());
        return new DisassociateMembersResponse($result->toArray());
    }
}
