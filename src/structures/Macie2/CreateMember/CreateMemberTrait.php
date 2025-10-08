<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateMember;

trait CreateMemberTrait
{
    /**
     * @param CreateMemberRequest $args
     * @return CreateMemberResponse
     */
    public function createMember(CreateMemberRequest $args)
    {
        $result = parent::createMember($args->toArray());
        return new CreateMemberResponse($result->toArray());
    }
}
