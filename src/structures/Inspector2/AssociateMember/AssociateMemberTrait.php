<?php

namespace Sunaoka\Aws\Structures\Inspector2\AssociateMember;

trait AssociateMemberTrait
{
    /**
     * @param AssociateMemberRequest $args
     * @return AssociateMemberResponse
     */
    public function associateMember(AssociateMemberRequest $args)
    {
        $result = parent::associateMember($args->toArray());
        return new AssociateMemberResponse($result->toArray());
    }
}
