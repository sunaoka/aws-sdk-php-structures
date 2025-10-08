<?php

namespace Sunaoka\Aws\Structures\Macie2\GetInvitationsCount;

trait GetInvitationsCountTrait
{
    /**
     * @param GetInvitationsCountRequest $args
     * @return GetInvitationsCountResponse
     */
    public function getInvitationsCount(GetInvitationsCountRequest $args)
    {
        $result = parent::getInvitationsCount($args->toArray());
        return new GetInvitationsCountResponse($result->toArray());
    }
}
