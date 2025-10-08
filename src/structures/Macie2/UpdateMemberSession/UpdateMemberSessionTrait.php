<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateMemberSession;

trait UpdateMemberSessionTrait
{
    /**
     * @param UpdateMemberSessionRequest $args
     * @return UpdateMemberSessionResponse
     */
    public function updateMemberSession(UpdateMemberSessionRequest $args)
    {
        $result = parent::updateMemberSession($args->toArray());
        return new UpdateMemberSessionResponse($result->toArray());
    }
}
