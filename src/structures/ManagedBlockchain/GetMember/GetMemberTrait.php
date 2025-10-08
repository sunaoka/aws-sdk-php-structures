<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetMember;

trait GetMemberTrait
{
    /**
     * @param GetMemberRequest $args
     * @return GetMemberResponse
     */
    public function getMember(GetMemberRequest $args)
    {
        $result = parent::getMember($args->toArray());
        return new GetMemberResponse($result->toArray());
    }
}
