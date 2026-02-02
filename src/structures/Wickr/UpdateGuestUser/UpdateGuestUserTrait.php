<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateGuestUser;

trait UpdateGuestUserTrait
{
    /**
     * @param UpdateGuestUserRequest $args
     * @return UpdateGuestUserResponse
     */
    public function updateGuestUser(UpdateGuestUserRequest $args)
    {
        $result = parent::updateGuestUser($args->toArray());
        return new UpdateGuestUserResponse($result->toArray());
    }
}
