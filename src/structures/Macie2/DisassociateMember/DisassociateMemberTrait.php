<?php

namespace Sunaoka\Aws\Structures\Macie2\DisassociateMember;

trait DisassociateMemberTrait
{
    /**
     * @param DisassociateMemberRequest $args
     * @return DisassociateMemberResponse
     */
    public function disassociateMember(DisassociateMemberRequest $args)
    {
        $result = parent::disassociateMember($args->toArray());
        return new DisassociateMemberResponse($result->toArray());
    }
}
