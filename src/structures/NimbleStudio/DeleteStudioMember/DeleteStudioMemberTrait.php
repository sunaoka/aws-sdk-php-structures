<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteStudioMember;

trait DeleteStudioMemberTrait
{
    /**
     * @param DeleteStudioMemberRequest $args
     * @return DeleteStudioMemberResponse
     */
    public function deleteStudioMember(DeleteStudioMemberRequest $args)
    {
        $result = parent::deleteStudioMember($args->toArray());
        return new DeleteStudioMemberResponse($result->toArray());
    }
}
