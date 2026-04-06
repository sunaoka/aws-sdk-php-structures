<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListLaunchProfileMembers;

trait ListLaunchProfileMembersTrait
{
    /**
     * @param ListLaunchProfileMembersRequest $args
     * @return ListLaunchProfileMembersResponse
     */
    public function listLaunchProfileMembers(ListLaunchProfileMembersRequest $args)
    {
        $result = parent::listLaunchProfileMembers($args->toArray());
        return new ListLaunchProfileMembersResponse($result->toArray());
    }
}
