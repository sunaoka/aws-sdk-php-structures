<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\UpdateLaunchProfileMember;

trait UpdateLaunchProfileMemberTrait
{
    /**
     * @param UpdateLaunchProfileMemberRequest $args
     * @return UpdateLaunchProfileMemberResponse
     */
    public function updateLaunchProfileMember(UpdateLaunchProfileMemberRequest $args)
    {
        $result = parent::updateLaunchProfileMember($args->toArray());
        return new UpdateLaunchProfileMemberResponse($result->toArray());
    }
}
