<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxUser;

trait DeleteKxUserTrait
{
    /**
     * @param DeleteKxUserRequest $args
     * @return DeleteKxUserResponse
     */
    public function deleteKxUser(DeleteKxUserRequest $args)
    {
        $result = parent::deleteKxUser($args->toArray());
        return new DeleteKxUserResponse($result->toArray());
    }
}
