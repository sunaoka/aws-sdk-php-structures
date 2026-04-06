<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfileMember;

trait GetLaunchProfileMemberTrait
{
    /**
     * @param GetLaunchProfileMemberRequest $args
     * @return GetLaunchProfileMemberResponse
     */
    public function getLaunchProfileMember(GetLaunchProfileMemberRequest $args)
    {
        $result = parent::getLaunchProfileMember($args->toArray());
        return new GetLaunchProfileMemberResponse($result->toArray());
    }
}
