<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\UpdateMember;

trait UpdateMemberTrait
{
    /**
     * @param UpdateMemberRequest $args
     * @return UpdateMemberResponse
     */
    public function updateMember(UpdateMemberRequest $args)
    {
        $result = parent::updateMember($args->toArray());
        return new UpdateMemberResponse($result->toArray());
    }
}
