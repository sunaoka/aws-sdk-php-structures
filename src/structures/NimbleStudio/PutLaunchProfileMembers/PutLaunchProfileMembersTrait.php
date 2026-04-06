<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\PutLaunchProfileMembers;

trait PutLaunchProfileMembersTrait
{
    /**
     * @param PutLaunchProfileMembersRequest $args
     * @return PutLaunchProfileMembersResponse
     */
    public function putLaunchProfileMembers(PutLaunchProfileMembersRequest $args)
    {
        $result = parent::putLaunchProfileMembers($args->toArray());
        return new PutLaunchProfileMembersResponse($result->toArray());
    }
}
