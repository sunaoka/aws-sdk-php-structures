<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStudioMember;

trait GetStudioMemberTrait
{
    /**
     * @param GetStudioMemberRequest $args
     * @return GetStudioMemberResponse
     */
    public function getStudioMember(GetStudioMemberRequest $args)
    {
        $result = parent::getStudioMember($args->toArray());
        return new GetStudioMemberResponse($result->toArray());
    }
}
