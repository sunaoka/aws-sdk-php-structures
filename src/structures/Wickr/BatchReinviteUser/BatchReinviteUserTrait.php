<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchReinviteUser;

trait BatchReinviteUserTrait
{
    /**
     * @param BatchReinviteUserRequest $args
     * @return BatchReinviteUserResponse
     */
    public function batchReinviteUser(BatchReinviteUserRequest $args)
    {
        $result = parent::batchReinviteUser($args->toArray());
        return new BatchReinviteUserResponse($result->toArray());
    }
}
