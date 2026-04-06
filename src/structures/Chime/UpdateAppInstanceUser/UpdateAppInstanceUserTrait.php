<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateAppInstanceUser;

trait UpdateAppInstanceUserTrait
{
    /**
     * @param UpdateAppInstanceUserRequest $args
     * @return UpdateAppInstanceUserResponse
     */
    public function updateAppInstanceUser(UpdateAppInstanceUserRequest $args)
    {
        $result = parent::updateAppInstanceUser($args->toArray());
        return new UpdateAppInstanceUserResponse($result->toArray());
    }
}
