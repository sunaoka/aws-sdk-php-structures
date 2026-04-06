<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteLaunchProfileMember;

trait DeleteLaunchProfileMemberTrait
{
    /**
     * @param DeleteLaunchProfileMemberRequest $args
     * @return DeleteLaunchProfileMemberResponse
     */
    public function deleteLaunchProfileMember(DeleteLaunchProfileMemberRequest $args)
    {
        $result = parent::deleteLaunchProfileMember($args->toArray());
        return new DeleteLaunchProfileMemberResponse($result->toArray());
    }
}
