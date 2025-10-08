<?php

namespace Sunaoka\Aws\Structures\Macie2\DeleteMember;

trait DeleteMemberTrait
{
    /**
     * @param DeleteMemberRequest $args
     * @return DeleteMemberResponse
     */
    public function deleteMember(DeleteMemberRequest $args)
    {
        $result = parent::deleteMember($args->toArray());
        return new DeleteMemberResponse($result->toArray());
    }
}
