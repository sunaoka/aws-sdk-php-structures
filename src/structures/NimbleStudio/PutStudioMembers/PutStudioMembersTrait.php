<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\PutStudioMembers;

trait PutStudioMembersTrait
{
    /**
     * @param PutStudioMembersRequest $args
     * @return PutStudioMembersResponse
     */
    public function putStudioMembers(PutStudioMembersRequest $args)
    {
        $result = parent::putStudioMembers($args->toArray());
        return new PutStudioMembersResponse($result->toArray());
    }
}
