<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateMembers;

trait CreateMembersTrait
{
    /**
     * @param CreateMembersRequest $args
     * @return CreateMembersResponse
     */
    public function createMembers(CreateMembersRequest $args)
    {
        $result = parent::createMembers($args->toArray());
        return new CreateMembersResponse($result->toArray());
    }
}
