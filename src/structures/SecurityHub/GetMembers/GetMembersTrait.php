<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetMembers;

trait GetMembersTrait
{
    /**
     * @param GetMembersRequest $args
     * @return GetMembersResponse
     */
    public function getMembers(GetMembersRequest $args)
    {
        $result = parent::getMembers($args->toArray());
        return new GetMembersResponse($result->toArray());
    }
}
