<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStudioMembers;

trait ListStudioMembersTrait
{
    /**
     * @param ListStudioMembersRequest $args
     * @return ListStudioMembersResponse
     */
    public function listStudioMembers(ListStudioMembersRequest $args)
    {
        $result = parent::listStudioMembers($args->toArray());
        return new ListStudioMembersResponse($result->toArray());
    }
}
