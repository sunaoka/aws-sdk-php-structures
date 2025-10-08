<?php

namespace Sunaoka\Aws\Structures\Macie2\GetMember;

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
