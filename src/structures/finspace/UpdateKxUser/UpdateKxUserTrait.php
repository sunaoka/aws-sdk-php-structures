<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxUser;

trait UpdateKxUserTrait
{
    /**
     * @param UpdateKxUserRequest $args
     * @return UpdateKxUserResponse
     */
    public function updateKxUser(UpdateKxUserRequest $args)
    {
        $result = parent::updateKxUser($args->toArray());
        return new UpdateKxUserResponse($result->toArray());
    }
}
